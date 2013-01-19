<style type="text/css">
  .fileinput-button {
    position: relative;
    overflow: hidden;
    float: left;
    margin-right: 4px;
  }
.fileinput-button input {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    opacity: 0;
    filter: alpha(opacity=0);
    transform: translate(-300px, 0) scale(4);
    font-size: 23px;
    direction: ltr;
    cursor: pointer;
}
.fileupload-buttonbar .btn,
.fileupload-buttonbar .toggle {
  margin-bottom: 5px;
}

#saveBeat {
  margin-bottom: 10px;
}

.icons {
  float: left;
  margin-right: 5px;
  margin-top: 2px;
}

#titel{
  float: left;
  margin-right: 5px;
}

#ueberschrift{
  padding-top: 0px;
  margin-top: 0px;
}
</style>
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="#">Publish Audio</a>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li><a href="index.php">Home</a></li>
          <li class="active"><a href="admin.php">Admin</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>

<div class="container" style="margin-top:20px;">
<div>
	<form action="admin.php" method="POST" enctype="multipart/form-data">
    <fieldset class="span8 offset1 well">
      <h4 id="ueberschrift">Neuer Beat</h4>
      
      <div>
        <div id="titelIco" class="icons">
          <img src="assets/img/cross.png" alt="not accepted">
        </div>
        <input type="text" name="titel" id="titel" placeholder="Titel" />
      </div>
      
      <div>
        <div id="sampleFileIco" class="icons">
          <img src="assets/img/cross.png" alt="not accepted">
        </div>
        <span class="btn btn-primary fileinput-button">
          <i class="icon-plus icon-white"></i>
          Sample Hochladen
          <input type="file" class="input" name="sampleFile" id="sampleFile">
        </span>
      </div>

      <div>
        <div id="fullFileIco" class="icons">
          <img src="assets/img/cross.png" alt="not accepted">
        </div>
        <span class="btn btn-primary fileinput-button">
          <i class="icon-plus icon-white"></i>
          Original Hochladen
          <input type="file" class="input" name="fullFile" id="fullFile">
        </span>
      </div>

      <button id="saveBeat" name="saveBeat" class="btn" disabled="disabled">Speichern</button>
    </fieldset>
  </form>
</div>


<!-- <div class="audio-content">
   <audio preload='none' controls>
	   	<source src='http://download.binaergewitter.de/2012-12-13.Binaergewitter.Talk.36.mp3' type='audio/mp3' />
	   	<source src='http://download.binaergewitter.de/2012-12-13.Binaergewitter.Talk.36.ogg' type='audio/ogg' />
	   	<source src='http://download.binaergewitter.de/2012-12-13.Binaergewitter.Talk.36.m4a' type='audio/x-m4a' />
	   	<source src='http://download.binaergewitter.de/2012-12-13.Binaergewitter.Talk.36.opus' type='' />
   </audio>
</div> -->
</div> 