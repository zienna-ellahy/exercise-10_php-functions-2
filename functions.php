<?php 

function titlecase($word) {
  $word = ucwords($word);
  return $word;
}

function capfirst($word) {
  $word = ucfirst($word);
  return $word;
}

function makeCoffee($type) {
  if ($type == 'coffee') {
    $valid = true;
    $description = 'It&rsquo;s a bean juice that gives people energy; it becomes espresso in it&rsquo;s highly concetrated form.';
  } else if ($type == 'latte') {
    $valid = true;
    $description = 'A latte is a shortened version of the Italian word, caffè latte, which means milk coffee. Lattes contain a shot of espresso and steamed milk.';
  } else if ($type == 'mocha') {
    $valid = true;
    $description = 'Chocolate milk coffee, basically.';
  } else if ($type == 'espresso') {
    $valid = true;
    $description = 'Highly concentrated Italian coffee served in a single standard shot.';
  } else {
    $valid = false;
  };

  if ($valid == true) {
    return('
      <div class="card my-4 mx-auto" style="width: 20rem;">
        <img class="img-fluid" src="images/'.$type.'.jpg" alt="Card image cap">
        <div class="card-block">
          <h2 class="h4 card-title">'.titlecase($type).'</h2>
          <p class="card-text">'.$description.'</p>
        </div>
      </div>
    ');
  } else {
    return('
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="m-0"><strong>'.capfirst($type).'? Gross!</strong> Enter something good next time.</p>
      </div>
    ');
  }
}
