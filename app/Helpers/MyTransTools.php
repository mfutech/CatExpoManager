<?php

namespace App\Helpers;

class MyTransTools
{
    public static  function trans_label($key) {
      return ucfirst(trans($key)) . ":";
    }
} 