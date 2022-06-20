<?php

  namespace RandomQuotes;

  class RandomQuotes {

    public function getRandomQuotes() {

      // Get the list of quotes.
      $quotes =  "Hello world";
      
      return $quotes;

    }

    public function generate() {
      return $this->getRandomQuotes();
    }

  }