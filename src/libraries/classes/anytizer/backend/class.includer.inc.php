<?php
namespace anytizer\backend;

class includer
{
    private $path;
    private $class_name;
    public function __construct(string $path)
    {
        $this->path = realpath($path);
    }
	
	private function get_namespace($class_name="")
	{
		$chunks = explode("\\", $class_name);
        
		/**
		 * The last word is the class name
		 */
		$this->class_name = array_pop($chunks);
        
		$namespace = implode("/", $chunks);
        if(!$namespace)
		{
			$namespace = ".";
		}
		
		return $namespace;
	}
	
	private function filename_normal($namespace="")
	{
		return "{$this->path}/{$namespace}/class.{$this->class_name}.inc.php";
	}
	
	private function filename_psr0($class_name)
	{
		return "{$class_name}.php";
	}

	/**
	 * namespace/class.{name}.inc.php
	 */
    public function namespaced_inc_dot(string $class_name)
    {
        $namespace = $this->get_namespace($class_name);

		$file = $this->filename_normal($namespace);
		if(is_file($file))
		{
			require_once($file);
		}
    }
	
	/**
	 * @todo Untested
	 */
	public function psr0(string $class_name)
    {
        $chunks = explode("\\", $class_name);
        $class_name = array_pop($chunks);
        $namespace = implode("/", $chunks);
        if(!$namespace) $namespace = ".";

        $path = $this->path;
		$file = "{$path}/{$namespace}/{$class_name}.php";
		if(is_file($file))
		{
			require_once($file);
		}
    }
}
