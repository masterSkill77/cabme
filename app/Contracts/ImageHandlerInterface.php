<?php

/**
 * Image Handler Interface
 *
 * @package     Gofer
 * @subpackage  Contracts
 * @category    Image Handler
 * @author      SMR IT Solutions Team
 * @version     2.2.1
 * @link        https://smritsolutions.com
*/

namespace App\Contracts;

interface ImageHandlerInterface
{
	public function upload($image, $options);
	public function delete($image, $options);
	public function getImage($file_name, $options);
}