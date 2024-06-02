<?php

$food_item = <<<END

<article class="food-item">
  <div class="image-container">
    <a href="$get_request_in_url">
      <img src="$img" alt="$title">
    </a>
  </div>
  <div class="food-item-description">
    <h2><a href="/">$title</a></h2>
    <div class="metrics">
      <div class="metric score">
        <img src="$emoji" alt="Score: $text">
        <p class="$text">$review_score</p>
      </div>
      <div class="metric reviews">
        <img src="assets/ico-reviews.svg" alt="Review">
        <p>$review_count</p>
      </div>
      <div class="metric allergies">
        <img src="assets/ico-allergies.svg" alt="Allergen">
        <p>$allergens_count alergeny</p>
      </div>
    </div>
  </div>
</article>

END;

function determineScore($review_score) {
  switch($review_score) {
    case $review_score >= 85: 
      echo "great";
      break;
      case $review_score < 85 && $review_score >= 70: 
        echo "good";
        break;
      // etc.
  }
  return array(
    'emoji' => 'path_to_emoji',
    'text' => 'good'
  );
}
