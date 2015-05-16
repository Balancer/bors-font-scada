<?php

namespace B2\Font;

class Scada
{
	static function baseUrl() { return '/_bors-assets/font-scada'; }

	static function load()
	{
		bors_use('pre:'.self::baseUrl().'/js/scada-local-storage-pre.js');
	}
}
