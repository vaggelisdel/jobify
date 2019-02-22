<?php defined('BASEPATH') OR exit('No direct script access allowed');

// Κλάση για απλές σελίδες όπως η αρχική
class Pages extends CI_Controller {
  protected $metadata = array(
    'title' => null,
    'description' => 'Το Jobify είναι μια online πλατφόρμα αγγελιών εργασίας'
  );

  // Αρχική Σελίδα
  public function index() {
    // 404 σφάλμα όταν το view δεν υπάρχει
    if(!file_exists('application/views/public_area/pages/homepage.php'))
      show_404();

      $this->metadata['title'] = 'Jobify';

    $this->load->view('public_area/pages/homepage', $this->metadata);
  }
  public function troll() {
      echo "troll";
  }

}