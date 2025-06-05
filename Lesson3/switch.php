<?php
  $AGE = 15;
  switch (true) {
      case ($AGE >= 0 && $AGE < 17):
          echo "You are a Minor (0-17 Years Old).<br>";
          break;
      case ($AGE >= 18 && $AGE < 20):
          echo "You are a Young Adult.<br>";
          break;
      case ($AGE >= 20 && $AGE < 60):
          echo "You are an Adult.<br>";
          break;
      default:
          echo "Invalid Input.<br>";
          break;
  }
?>