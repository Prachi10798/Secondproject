@extends('layouts.app')
@sectioj('content')

<!-- Photo grid (modal) -->
<div class="w3-row-padding">
    <div class="w3-half">
      <img src="img/kitchenconcrete.jpg" style="width:100%" onclick="onClick(this)" alt="Concrete meets bricks">
      <img src="img/livingroom.jpg" style="width:100%" onclick="onClick(this)" alt="Light, white and tight scandinavian design">
      <img src="img/diningroom.jpg" style="width:100%" onclick="onClick(this)" alt="White walls with designer chairs">
    </div>

    <div class="w3-half">
      <img src="img/atrium.jpg" style="width:100%" onclick="onClick(this)" alt="Windows for the atrium">
      <img src="img/bedroom.jpg" style="width:100%" onclick="onClick(this)" alt="Bedroom and office in one space">
      <img src="img/livingroom2.jpg" style="width:100%" onclick="onClick(this)" alt="Scandinavian design">
    </div>
  </div>

@endsection