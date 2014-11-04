<?php

use SleepingOwl\BladeExtended\BladeExtended;

class IndexController extends \Controller
{

	protected $languages = [
		'en' => 'English',
		'ru' => 'Russian'
	];

	public function getIndex($lang = 'en')
	{
		$langLabel = $this->languages[$lang];
		return View::make($lang . '.index', compact('lang', 'langLabel'))->with('examples', $this->codeExamples());
	}

	public function getDemo($lang = 'en')
	{
		$langLabel = $this->languages[$lang];
		$demoSource = $this->codeExamples()['demo-source'];
		return View::make($lang . '.demo', compact('lang', 'langLabel', 'demoSource'));
	}

	public function postDemo()
	{
		$source = Input::get('source');
		$blade = BladeExtended::instance();
		$blade->setContent($source);
		try
		{
			return $blade->parse();
		} catch (\Exception $e)
		{
			return 'Exception: ' . $e->getMessage();
		}
	}

	protected function codeExamples()
	{
		/** @var SplFileInfo[] $files */
		$files = File::allFiles(app_path('code_examples'));
		$examples = [];
		foreach ($files as $file)
		{
			$name = str_replace(['.blade.php', '.php'], '', $file->getFilename());
			$examples[$name] = file_get_contents($file->getPathname());
		}
		return $examples;
	}

}
