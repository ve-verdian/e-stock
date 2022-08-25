<<<<<<< HEAD
<?php
class Pdf {
 
    function __construct() {
        include_once APPPATH . '/third_party/fpdf/fpdf.php';
    }
}
?>
=======
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';

class Pdf extends TCPDF
{
    function __construct()
    {
        parent::__construct();
    }
}

/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */
>>>>>>> 3be6f91dfde298de5f65865ce6ea2be0989d0555
