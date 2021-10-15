<?php
/**
 *  embedVideo ()
 * -----------------------------------------------------------------------
 *
 * This method will allow you to embed any youtube video by just passing
 * it the youtube embed code example: RLyXR8Pk-GY
 * By just using the youtube code we can store the codes in a database.
 *
 * Usage:
 *
 * Copy the code from the url bar on youtube and paste it like below.
 * https://www.youtube.com/watch?v=RLyXR8Pk-GY
 *                                |   copy    |
 * $data = ['video' => embedVideo('RLyXR8Pk-GY'),];
 * echo view('your_view', $data);
 *
 * You can setup more data[] video variables that you need.
 */
if (! function_exists('embedVideo')) {
    /**
     * embedVideo ()
     * -------------------------------------------------------------------
     *
     * @return false|string
     */
    function embedVideo(string $code, string $width = '640', string $height = '385')
    {
        $code = trim($code);

        // Parse URL's to find the code
        $url = filter_var($code, FILTER_VALIDATE_URL);
        if (! empty($url)) {
            parse_str(substr($url, strpos($url, '?') + 1), $result);

            $code = $result['v'] ?? null;
        }

        if (isset($code) && ! empty($code)) {
            return '
				<iframe width="' . $width . '" height="' . $height . '"
					src="https://www.youtube.com/embed/' . $code . '" frameborder="0"
					allow="accelerometer; autoplay; clipboard-write; encrypted-media;
					gyroscope; picture-in-picture" allowfullscreen>
				</iframe>';
        }

        return false;
    }
}
