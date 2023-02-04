<?php

namespace App\Http\Yoyo;

use Clickfwd\Yoyo\Component;

class Upload extends Component
{
    protected $error;

    protected function getImageProperty()
    {
        $request = request();

        if (! $request->photo) {
            return '';
        }

        if (! $this->isImage($request->photo)) {
            $this->error = 'Not a valid image';

            return;
        }

        $tmp = $request->photo->path();

        $str = file_get_contents($tmp);

        return base64_encode($str);
    }

    protected function getErrorProperty()
    {
        return $this->error;
    }

    protected function isImage($file)
    {
        $whitelist_type = ['image/jpeg', 'image/png', 'image/gif'];

        $fileinfo = finfo_open(FILEINFO_MIME_TYPE);

        if (in_array(finfo_file($fileinfo, $file->path()), $whitelist_type)) {
            return true;
        }

        return false;
    }
}
