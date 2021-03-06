<?php
class BasicIterator extends IteratorIterator {

	public function __construct($pathToFile) {
		// Call the parent constructor with an SplFileObject (also Traversable) for the given path.
		parent::__construct(new SplFileObject($pathToFile, 'r'));

		// These set up the inner SplFileObject's properties to process CSV.
		$file = $this->getInnerIterator();
		$file->setFlags(SplFileObject::READ_CSV);
		$file->setCsvControl(',', '"', "\\");
	}
}

$filePath = './data.csv';
$iterator = new BasicIterator($filePath);

foreach ($iterator as $i => $row) {
    echo "<pre>";
	var_dump($row);
    echo "</pre>";
}


