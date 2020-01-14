<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="jquery-3.3.1.js"></script>
<script>
$('.carosel-control-right').click(function() {
  $(this).blur();
  $(this).parent().find('.carosel-item').first().insertAfter($(this).parent().find('.carosel-item').last());
});
$('.carosel-control-left').click(function() {
  $(this).blur();
  $(this).parent().find('.carosel-item').last().insertBefore($(this).parent().find('.carosel-item').first());
});	

</script>
<style>@media (max-width: 300px) {
  .carosel-item {
    width: 100%;
  }
}
@media (min-width: 300px) {
  .carosel-item {
    width: 50%;
  }
}
@media (min-width: 500px) {
  .carosel-item {
    width: 33.333%;
  }
}
@media (min-width: 768px) {
  .carosel-item {
    width: 25%;
  }
}
.carosel {
  position: relative;
  background-color: #000;
}
.carosel-inner {
  white-space: nowrap;
  overflow: hidden;
  font-size: 0;
}
.carosel-item {
  display: inline-block;
}
.carosel-control {
  position: absolute;
  top: 50%;
  padding: 15px;
  box-shadow: 0 0 10px 0px rgba(0, 0, 0, 0.5);
  transform: translateY(-50%);
  border-radius: 50%;
  color: rgba(0, 0, 0, 0.5);
  font-size: 30px;
  display: inline-block;
}
.carosel-control-left {
  left: 15px;
}
.carosel-control-right {
  right: 15px;
}
.carosel-control:active,
.carosel-control:hover {
  text-decoration: none;
  color: rgba(0, 0, 0, 0.8);
}</style>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="carosel" id="carosel1">
  <a class="carosel-control carosel-control-left glyphicon glyphicon-chevron-left" href="#"></a>
  <div class="carosel-inner">
    <img class="carosel-item" src="http://placehold.it/500/bbbbbb/fff&amp;text=1" />
    <img class="carosel-item" src="http://placehold.it/500/CCCCCC&amp;text=2" />
    <img class="carosel-item" src="http://placehold.it/500/eeeeee&amp;text=3" />
    <img class="carosel-item" src="http://placehold.it/500/f4f4f4&amp;text=4" />
    <img class="carosel-item" src="http://placehold.it/500/fcfcfc/333&amp;text=5" />
    <img class="carosel-item" src="http://placehold.it/500/f477f4/fff&amp;text=6" />
  </div>
  <a class="carosel-control carosel-control-right glyphicon glyphicon-chevron-right" href="#"></a>
</div>
<div class="carosel" id="carosel2">
  <a class="carosel-control carosel-control-left glyphicon glyphicon-chevron-left" href="#"></a>
  <div class="carosel-inner">
    <img class="carosel-item" src="http://placehold.it/500/bbbbbb/fff&amp;text=1" />
    <img class="carosel-item" src="http://placehold.it/500/CCCCCC&amp;text=2" />
    <img class="carosel-item" src="http://placehold.it/500/eeeeee&amp;text=3" />
    <img class="carosel-item" src="http://placehold.it/500/f4f4f4&amp;text=4" />
    <img class="carosel-item" src="http://placehold.it/500/fcfcfc/333&amp;text=5" />
    <img class="carosel-item" src="http://placehold.it/500/f477f4/fff&amp;text=6" />
  </div>
  <a class="carosel-control carosel-control-right glyphicon glyphicon-chevron-right" href="#"></a>
</div>
</body>
</html>

