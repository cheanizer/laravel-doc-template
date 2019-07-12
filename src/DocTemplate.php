<?php 

namespace Cheanizer\DocTemplate;

class DocTemplate
{
	protected $parameters = [];
    protected $file;

	public function __construct()
	{

	}

	public function template($path = '')
    {   
        if ( empty ($path)) abort(404);

        $this->file = $this->getFile($path);

        return $this;
    }

    public function with($parameters = [])
    {
        $this->parameters = $parameters;
        return $this->replace();
    }

    public function save($filename = '')
    {
        try {
        file_put_contents($filename, $this->file);
        }catch(\Exception $e)
        {
            abort(403);
        }
    }

    protected function replace()
    {
        foreach ($this->parameters as $key => $value)
        {
            $source = '[' . strtoupper($key) . ']';
            $this->file = str_replace(trim($source),$value,$this->file);
        }
        return $this;
    }

    public function getFile($file)
    {
        try {
            $arrContextOptions = array(
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                ),
            );       
            $result = file_get_contents($file, false, stream_context_create($arrContextOptions));
            return $result;
        }catch(\Exception $e){
            abort(404);
        }
    }
}