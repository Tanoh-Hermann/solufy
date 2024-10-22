<?php

/**
 * @package    Grav\Common\Page
 *
 * @copyright  Copyright (C) 2015 - 2020 Trilby Media, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

namespace Grav\Common\Page\Medium;

use Grav\Common\Grav;
use Grav\Common\Data\Blueprint;
use Grav\Framework\Form\FormFlashFile;
use Psr\Http\Message\UploadedFileInterface;

class MediumFactory
{
    /**
     * Create Medium from a file
     *
     * @param  string $file
     * @param  array  $params
     * @return Medium|null
     */
    public static function fromFile($file, array $params = [])
    {
        if (!file_exists($file)) {
            return null;
        }

        $parts = pathinfo($file);
        $path = $parts['dirname'];
        $filename = $parts['basename'];
        $ext = $parts['extension'] ?? '';
        $basename = $parts['filename'];

        $config = Grav::instance()['config'];

        $media_params = $ext ? $config->get('media.types.' . strtolower($ext)) : null;
        if (!\is_array($media_params)) {
            return null;
        }

        $params += $media_params;

        // Add default settings for undefined variables.
        $params += (array)$config->get('media.types.defaults');
        $params += [
            'type' => 'file',
            'thumb' => 'media/thumb.png',
            'mime' => 'application/octet-stream',
            'filepath' => $file,
            'filename' => $filename,
            'basename' => $basename,
            'extension' => $ext,
            'path' => $path,
            'modified' => filemtime($file),
            'thumbnails' => []
        ];

        $locator = Grav::instance()['locator'];

        $file = $locator->findResource("image://{$params['thumb']}");
        if ($file) {
            $params['thumbnails']['default'] = $file;
        }

        return static::fromArray($params);
    }

    /**
     * Create Medium from an uploaded file
     *
     * @param  UploadedFileInterface $uploadedFile
     * @param  array  $params
     * @return Medium|null
     */
    public static function fromUploadedFile(UploadedFileInterface $uploadedFile, array $params = [])
    {
        // For now support only FormFlashFiles, which exist over multiple requests. Also ignore errored and moved media.
        if (!$uploadedFile instanceof FormFlashFile || $uploadedFile->getError() !== \UPLOAD_ERR_OK || $uploadedFile->isMoved()) {
            return null;
        }

        $clientName = $uploadedFile->getClientFilename();
        if (!$clientName) {
            return null;
        }

        $parts = pathinfo($clientName);
        $filename = $parts['basename'];
        $ext = $parts['extension'] ?? '';
        $basename = $parts['filename'];
        $file = $uploadedFile->getTmpFile();
        $path = $file ? dirname($file) : '';

        $config = Grav::instance()['config'];

        $media_params = $ext ? $config->get('media.types.' . strtolower($ext)) : null;
        if (!\is_array($media_params)) {
            return null;
        }

        $params += $media_params;

        // Add default settings for undefined variables.
        $params += (array)$config->get('media.types.defaults');
        $params += [
            'type' => 'file',
            'thumb' => 'media/thumb.png',
            'mime' => 'application/octet-stream',
            'filepath' => $file,
            'filename' => $filename,
            'basename' => $basename,
            'extension' => $ext,
            'path' => $path,
            'modified' => $file ? filemtime($file) : 0,
            'thumbnails' => []
        ];

        $locator = Grav::instance()['locator'];

        $file = $locator->findResource("image://{$params['thumb']}");
        if ($file) {
            $params['thumbnails']['default'] = $file;
        }

        return static::fromArray($params);
    }

    /**
     * Create Medium from array of parameters
     *
     * @param  array          $items
     * @param  Blueprint|null $blueprint
     * @return Medium
     */
    public static function fromArray(array $items = [], Blueprint $blueprint = null)
    {
        $type = $items['type'] ?? null;

        switch ($type) {
            case 'image':
                return new ImageMedium($items, $blueprint);
            case 'thumbnail':
                return new ThumbnailImageMedium($items, $blueprint);
            case 'animated':
            case 'vector':
                return new StaticImageMedium($items, $blueprint);
            case 'video':
                return new VideoMedium($items, $blueprint);
            case 'audio':
                return new AudioMedium($items, $blueprint);
            default:
                return new Medium($items, $blueprint);
        }
    }

    /**
     * Create a new ImageMedium by scaling another ImageMedium object.
     *
     * @param  ImageMedium|Medium $medium
     * @param  int         $from
     * @param  int         $to
     * @return Medium|array
     */
    public static function scaledFromMedium($medium, $from, $to)
    {
        if (! $medium instanceof ImageMedium) {
            return $medium;
        }

        if ($to > $from) {
            return $medium;
        }

        $ratio = $to / $from;
        $width = $medium->get('width') * $ratio;
        $height = $medium->get('height') * $ratio;

        $prev_basename = $medium->get('basename');
        $basename = str_replace('@'.$from.'x', '@'.$to.'x', $prev_basename);

        $debug = $medium->get('debug');
        $medium->set('debug', false);
        $medium->setImagePrettyName($basename);

        $file = $medium->resize($width, $height)->path();

        $medium->set('debug', $debug);
        $medium->setImagePrettyName($prev_basename);

        $size = filesize($file);

        $medium = self::fromFile($file);
        if ($medium) {
            $medium->set('size', $size);
        }

        return ['file' => $medium, 'size' => $size];
    }
}