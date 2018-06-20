<?php
/**
 * 验证码
 * @authors Cscar
 * @date    2017-10-31 00:44:22
 */
class vcode
{
	private $width;
	private $height;
	private $num;
	private $code;
	private $image;

	public function __construct($width=100, $height=30, $num=4) {
		$this->width = $width;
		$this->height = $height;
		$this->num = $num;
		$this->code = $this->createcode();
	}

	//画板
	function create()
	{
		$this->draw_bg();
		$this->draw_string();
		$this->draw_point_line();
		$this->print_img();
	}

	//验证码
	private function createcode() {
			$codes = "qwertyupasdfghkxcvbnm2345689";

			$code = "";

			for($i=0; $i < $this->num; $i++) {
				$code .=$codes{rand(0, strlen($codes)-1)};	
			}
			$this->code = strtoupper($code);
			if (!isset($_SESSION)) {
				session_start();
			}
			$_SESSION['vcode'] = $this->code;
			return $code;
	}

	//得到验证码
	function get_code()
	{
		return $this->$code;
	}
	
	//画图
	private function draw_bg()
	{
		//bg size
		$this->img = imagecreatetruecolor($this->width, $this->height);
		//bg color
		$bgcolor = imagecolorallocate($this->img, rand(225, 255), rand(225, 255), rand(225, 255));
		//draw color
		imagefill($this->img, 0, 0, $bgcolor);
		//draw boder
		/*$bordercolor =  imagecolorallocate($this->img, 0, 0, 0);
		imagerectangle($this->img, 0, 0, $this->width-1, $this->height-1, $bordercolor);*/
	}

	//验证码图片
	private function draw_string()
	{
		for ($i=0; $i < $this->num; $i++)
		{
			$fontcolor = imagecolorallocate($this->img, rand(1, 120), rand(1, 120), rand(1, 120));

			$fontsize = 5;
			$x = $i * ($this->width/$this->num) + rand(1, 10);
			$y = rand(1, imagefontheight($fontsize));

			imagestring($this->img, $fontsize, $x, $y, $this->code{$i}, $fontcolor);
		}
	}

	//点和线
	private function draw_point_line($value='')
	{
		//画点
		for ($i=0; $i < 100; $i++)
		{
			$pointcolor = imagecolorallocate($this->img, rand(500, 200), rand(500, 200), rand(500, 200));
			imagesetpixel($this->img, rand(1, $this->width), rand(1, $this->height), $pointcolor);
		}

		//画线
		for ($i=0; $i < 4; $i++)
		{
			$linecolor = imagecolorallocate($this->img, rand(80, 220), rand(80, 220), rand(80, 220));
			imageline($this->img, rand(1, $this->width), rand(1, $this->height), rand(1, $this->width), rand(1, $this->height), $linecolor);
		}
	}

	//打印图片
	private function print_img()
	{
		header("Content-type: image/jpeg");
		imagegif($this->img);
	}

	//销毁
	function __destruct()
	{
		imagedestroy($this->img);
	}


}
