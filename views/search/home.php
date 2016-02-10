

<style>
.home_page h3.subtitle{
	font-weight: 300;
	font-size:20px;
}
.home_page h3.information{
	/*font-weight: 500;*/
	font-size:16px;
}

.home_page #main-logo-home{
	max-height: 290px;
	margin-top:30px;
}

.home_page #img-video-communecter{
	/*max-height: 440px;*/
}
.home_page .imageSectionVideo{
	width:80%;
	margin-left:10%;
}
.home_page .section-video{
	margin-top: 40px;
}

.home_page .btn-top{
	border-radius: 50px;
}

.home_page .btn-discover{
	border-radius: 60px;
	font-size: 50px;
	font-weight: 200;
	border: 1px solid transparent;
	width: 90px;
	height: 90px;
}
.home_page .btn-discover:hover{
	background-color: white !important;
	border-color: #2BB0C6 !important;
	color: #2BB0C6 !important;
}

.home_page .discover-subtitle{
	font-size:13px; 
	margin-top: -6px; 
	display: block;
}

.home_page .pastille{
	height: 100%;
	width: 100%;
	border-radius: 50px;
	font-size: 45px;
	padding: 13px 32px;
}

.list-action{
	/*width: 100%;*/
	/*padding: 5px 10px;*/
	margin-bottom:40px;
	font-size: 15px;
	font-weight: 300;
}

#img-network-for-all{
	/*max-width: 800px;*/
	padding:25px;
}
.menu-home-btn-ins{
	position: fixed;
	top: 0px;
	padding: 5px;
	right: 2%;
	z-index: 30;
	border-radius: 30px 30px 30px 30px;
}
#searchBarPostalCode{
	margin-top: 10px;
	width: 200px;
	margin-left: 0px;
	font-family: "homestead";
	font-size: 22px !important;
	border-radius: 3px !important;
	height: 40px;
}
input[type="text"].input-search:focus{
	/*border-color: #3C5665 !important;*/
	-moz-box-shadow: 0px 0px 5px -1px #CF3838 !important;
	-webkit-box-shadow: 0px 0px 5px -1px #CF3838 !important;
	-o-box-shadow: 0px 0px 5px -1px #CF3838 !important;
	box-shadow: 0px 0px 5px -1px #CF3838 !important;
	filter:progid:DXImageTransform.Microsoft.Shadow(color=#656565, Direction=NaN, Strength=5) !important;
}

#dropdown_search{
	margin-top:30px;
	margin-bottom:30px;
}

.btn-success.communected{
	width: 50%;
	margin-left: 25%;
	padding: 10px;
	border-radius: 20px;
	background-color:#5cb85c;
	color:white;
}

.searchEntity{
	margin-bottom:10px;
	margin-left:5px;
	display: inline-block;
}
.searchEntity .entityRight{
	text-align: center;
	padding: 6px 16px !important;
	margin-left: -1%;
	border-radius: 30px;
}
.searchEntity .entityRight .entityLocality{
	color:white !important;
	display: inline;
}
.searchEntity .entityRight .entityName{
	color:white !important;
	display: inline;
}
.contact-map {	background:url(<?php echo $this->module->assetsUrl; ?>/images/contact-map.jpg) top center no-repeat; background-size: 160% }
.section-header{
	text-align: center;
	padding: 30px 0 10px 0;
}
.social-list{	padding: 0;}
.social-list li{	list-style-type: none;	display:inline;margin-right:10px;}
.social-list li a{ font-size:20px;}
.section .social-list .btn{	margin-top: 15px;}
.section a.btn.btn-social{	color: #FFF;	background-color: #2a3945; }
.section a.btn.btn-social:hover{	background: none;}
.section a.btn.btn-facebook:hover{	color: #3b5998;}
.section a.btn.btn-twitter:hover{	color: #00a0d1;	border-color: #00a0d1;}
.section a.btn.btn-google:hover{	color: #dd4b39;	border-color: #dd4b39;}

</style>

<div class="home_page">

<?php if(!isset( Yii::app()->session['userId'] )) { ?>
	<div class="menu-home-btn-ins text-right" style="margin-right:8%;">
		<button class="btn-top btn bg-red" onclick="showPanel('box-login');"><i class="fa fa-sign-in"></i> Se connecter</button> 
		<button class="btn-top btn btn-success" onclick="showPanel('box-register');"><i class="fa fa-plus-circle"></i> S'inscrire</button>
		
	</div>
<?php }else{
		$this->renderPartial("short_info_profil", array("type" => "main")); 
	}
?> 


	<center>
		<img id="main-logo-home" class="img-responsive" src="<?php echo $this->module->assetsUrl; ?>/images/main-logo-home2.png"/><br/>
	</center>

	
	<h1 class="homestead text-dark text-center" id="main-title"
	style="font-size:25px;margin-bottom: 0px; margin-left: -112px;"><i class="fa fa-home"></i> Bienvenue <span class="text-red">sur</span></h1>

	<h1 class="homestead text-red no-margin text-center" id="main-title-communect"
		style="font-size:40px; margin-top:0px;">COMMUNE<span class="text-dark">CTER</span></h1>

	<h3 class="text-dark text-center no-margin subtitle">
		Le réseau social citoyen libre 
		<a href="/ph/vitrine" target="_blank"><img id="" class="" src="<?php echo $this->module->assetsUrl; ?>/images/byPH.png"/></a>
	</h3>

	<hr> 

	<h3 class="text-dark information center" style="margin-top:15px; ">
		<!-- <i class="fa fa-2x fa-angle-down"></i><br/> -->
		<strong><span class="text-red">Communecter</span> c'est simple : un code postal et c'est parti !</strong><br/>
		Je suis communecté : j'ai accès à ma ville !<br/>
	</h3>

	<div class="col-md-6" style="text-align:right;">
		<button class="btn bg-red" id="btn-param-postal-code"><i class="fa fa-cog"></i> Paramétrer mon code postal</button><br/>
		
		<div class="" style="display:none;" id="div-param-postal-code">	
			<i class="fa fa-2x fa-angle-right"></i> 
			<input id="searchBarPostalCode" class="input-search text-red" style="margin-left:5px;" type="text" placeholder="...">
		</div>
	</div>
	<div class="col-md-6">
		<button class="btn bg-dark pull-left" id="btn-geoloc-auto"><i class="fa fa-crosshairs"></i> Localisez-moi automatiquement</button>
	</div>

	<div id="dropdown_search" class="col-md-12">
		
	</div>

	<div style="display:none;" class="col-md-12" id="div-discover">
		<!-- <h2 class="btn-success communected">Félicitation, vous êtes communecté !</h2> -->
		<h2 class="center text-dark" style="margin-bottom:20px; margin-top:0px;">
			<i class="fa fa-2x fa-angle-down"></i><br/>
			Découvrir
		</h2>
		<div class="col-md-12" style="margin-bottom:40px">
			<div class="col-md-4 center text-azure" style="margin-bottom:10px; font-size:20px; font-weight: 300;">
				<a href="<?php echo Yii::app()->createUrl('/'.$this->module->id.'/search#search.directory'); ?>" 
					target="_blank" class="btn btn-discover bg-azure">
					<i class="fa fa-connectdevelop"></i>
				</a><br/>L'annuaire<br/><span class="text-red discover-subtitle">commune<span class="text-dark">cté</span></span>
			</div>
			<div class="col-md-4 center text-azure" style="margin-bottom:10px; font-size:20px; font-weight: 300;">
				<a href="<?php echo Yii::app()->createUrl('/'.$this->module->id.'/search#search.agenda'); ?>" 
					target="_blank" class="btn btn-discover bg-azure">
					<i class="fa fa-calendar"></i>
				</a><br/>L'agenda<br/><span class="text-red discover-subtitle">commune<span class="text-dark">cté</span></span>
			</div>
			<div class="col-md-4 center text-azure" style="margin-bottom:10px; font-size:20px; font-weight: 300;">
				<a href="<?php echo Yii::app()->createUrl('/'.$this->module->id.'/search#search.news'); ?>" 
					target="_blank" 
					class="btn btn-discover bg-azure">
					<i class="fa fa-rss"></i>
				</a><br/>L'actualité<br/><span class="text-red discover-subtitle">commune<span class="text-dark">cté</span></span>
			</div>
		</div>
	</div>
	
	<hr>
	
	<div class="section-content section-video" style="margin-top:90px;">
		<div class="textProjectSlider">
		</div>
		<div class="imageSection imageSectionVideo text-center">
			<img id="img-video-communecter" class="img-responsive img-thumbnail" src="<?php echo $this->module->assetsUrl; ?>/images/video2.jpg" onclick="openVideo()"/>
		</div>
	</div>

	


	<div class="col-md-10 col-md-offset-1">
		<h3 class="text-dark information center" style="margin-bottom:20px; padding-left:10px; font-weight:500;">
			<i class="fa fa-2x fa-angle-down"></i><br/>
			Quelques exemples d’actions concrètes réalisables grace à <span class="text-red">Communecter.org</span> : 
		</h3>
		<div class="row">
			<div class="col-md-4 list-action text-dark"><span class="text-azure"><strong><i class="fa fa-circle"></i> Périscolaire :</strong></span><br/> Outils d’informations pour découvrir et utiliser les activités périscolaires locales</div>
			<div class="col-md-4 list-action text-dark"><span class="text-azure"><strong><i class="fa fa-circle"></i> Associatif :</strong></span><br/> Donner aux associations une vitrine et un outil de valorisation de leurs actions. Utiliser un outil de cartographie des compétence au sein d’un groupe ...</div>
			<div class="col-md-4 list-action text-dark"><span class="text-azure"><strong><i class="fa fa-circle"></i> Economie :</strong></span><br/> Référencement des entreprises et des compétences locales. La valorisation des circuits courts de distribution favorise l'économie locale ...</div>
		</div>
		<div class="row">
			<div class="col-md-4 list-action text-dark"><span class="text-azure"><strong><i class="fa fa-circle"></i> Territoire :</strong></span><br/> Cartographie des compétences, des ressources, des projets, des acteurs d’un territoire, d’un groupe, d’une association ou d’une entreprise ...</div>
			<div class="col-md-4 list-action text-dark"><span class="text-azure"><strong><i class="fa fa-circle"></i> Tourisme :</strong></span><br/> Les habitants d’une commune sont ceux qui la connaissent et la valorisent le mieux ...</div>
			<div class="col-md-4 list-action text-dark"><span class="text-azure"><strong><i class="fa fa-circle"></i> Alimentation :</strong></span><br/> Liens étroits avec les associations locales (permaculture…), créations de projets de fermes pédagogiques ...</div>
		</div>
		<div class="row">
			<div class="col-md-4 list-action text-dark"><span class="text-azure"><strong><i class="fa fa-circle"></i> Agriculture :</strong></span><br/> Mise en évidence des producteurs locaux, potager à la maison, création de projets de maraîchages collectifs / jardins participatifs ...</div>
			<div class="col-md-4 list-action text-dark"><span class="text-azure"><strong><i class="fa fa-circle"></i> Culture :</strong></span><br/> Partage d'information sur l'animation du territoire, création d'événements, échange de services (ex : cours de guitare contre des cours de chant) ...</div>
			<div class="col-md-4 list-action text-dark"><span class="text-azure"><strong><i class="fa fa-circle"></i> Emploi :</strong></span><br/> Identification des manques d’offre de services pour favoriser des initiatives pouvant déboucher sur  des d'emplois et d'entreprises ...</div>
		</div>
		<div class="row">
			<div class="col-md-4 list-action text-dark"><span class="text-azure"><strong><i class="fa fa-circle"></i> Transport :</strong></span><br/> Facilitateur de  covoiturage, changements de comportements, débats sur les transports et recueil des besoins des administrés ...</div>
			<div class="col-md-4 list-action text-dark"><span class="text-azure"><strong><i class="fa fa-circle"></i> Logement :</strong></span><br/> Service d'annonces interactives, recueil des besoins des administrés, interactions avec les collectivités locales, débats citoyens agrégés ...</div>
			<div class="col-md-4 list-action text-dark"><span class="text-azure"><strong><i class="fa fa-circle"></i> Énergie :</strong></span><br/> Sensibilisation à la dépense énergétique, consommation produits HQE, partage d'information, débats sur la consommation plus durable / biens énergivores et non durables …</div>
		</div>
	</div>

	<div class="col-md-12" style="margin-bottom:40px">
		<h2 class="center text-dark">
			<i class="fa fa-2x fa-angle-down"></i><br/>
			Un réseau pour tous !
		</h2>

		<h3 class="text-dark information center" style="margin-bottom:20px; padding-left:10px; font-weight:500;">
			<span class="text-red">Communecter</span> réunit et fédère les principaux acteurs de la vie locale<br/>
			pour valoriser le territoire et le bien commun.  
		</h3>

		<center><img id="img-network-for-all" class="img-responsive" src="<?php echo $this->module->assetsUrl; ?>/images/network-for-all.png"/></center>
	</div>

	<?php if(!isset(Yii::app()->session['userId'])){ ?>
	<div class="col-lg-6 col-md-12" style="margin-bottom:20px">
		<h2 class="center text-dark">
			<i class="fa fa-2x fa-angle-down"></i><br/>
			<button class="btn btn-lg btn-register btn-success" style="border-radius:30px;"><i class="fa fa-plus-circle"></i> S'inscrire</button>
		</h2>
		<h3 class="text-dark information center" style="margin-bottom:20px; padding-left:10px; font-weight:300;">
			Vous êtes un <strong>citoyen, une association, une collectivité, une entreprise</strong> ?<br/>
			Vous rêvez d'un territoire <strong>connecté, interactif et dynamique</strong> ?<br/>
			Le réseau <span class="text-red"><strong>Communecter</strong></span> est fait pour vous !
		</h3>
	</div>
	<?php } ?>

	<div class="col-md-12" style="margin-bottom:40px">
		<h2 class="center text-dark">
			<i class="fa fa-2x fa-angle-down"></i><br/>
			<a href="/ph/vitrine" target="_blank"><img id="" class="" src="<?php echo $this->module->assetsUrl; ?>/images/byPH.png"/></a>
		</h2>

		<h3 class="text-dark information center" style="margin-bottom:20px; padding-left:10px; font-weight:500;">
			<a href="/ph/vitrine" target="_blank" class="text-red">Pixel Humain</a> est un collectif qui regroupe des acteurs réunionnais
et métropolitains partageant les valeurs d'open innovation et de partage, pour le bien commun.<br/><br/>
		</h3>
	</div>
	
	<div class="col-md-12">
		<!-- SECTION TITLE -->
		<div class="section-header with-arrow">
			<h1 class="parnet title_fontHome homestead">SCREEN SHOT</h1>
			
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>
	</div>

	<div class="col-md-12" style="background-color:#293A46 ">
		<!-- SECTION TITLE -->
		<div class="col-md-6">
			<div class="section-header with-arrow">
				<h1 class="parnet title_fontHome homestead">PENSéES D'AMIS</h1>
				
			</div>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>
		<div class="col-md-6">
			<div class="section-header with-arrow">
				<h1 class="parnet title_fontHome homestead">MOTS CLEFS</h1>
				<center>
					+ 262 692 38 32 58<br><a href="#">contact@pixelhumain.com</a>
					<!-- SOCIAL BUTTTONS -->
					<ul class="social-list">
						<li><a href="https://www.facebook.com/groups/pixelhumain/" class="btn btn-facebook btn-social"><span class="icon icon-facebook"></span></a></li>
						<li><a href="https://twitter.com/pixelhumain" class="btn btn-twitter btn-social"><span class="icon icon-twitter"></span></a></li>
						<li><a href="https://plus.google.com/communities/111483652487023091469" class="btn btn-google btn-social"><span class="icon icon-google-plus"></span> </a></li>
					</ul>
				</center>
			</div>
		</div>
	</div>

	<div class="col-md-12" style="background-color:#92BE1F ">
		<!-- SECTION TITLE -->
		<div class="section-header with-arrow">
			<h1 class="parnet title_fontHome homestead"><img class="icon_section img_cont" src="<?php echo $this->module->assetsUrl; ?>/images/mapping.png"><br/>CROWDFUNDING</h1>
			
			<center>
				+ 262 692 38 32 58<br><a href="#">contact@pixelhumain.com</a>
				<!-- SOCIAL BUTTTONS -->
				<ul class="social-list">
					<li><a href="https://www.facebook.com/groups/pixelhumain/" class="btn btn-facebook btn-social"><span class="icon icon-facebook"></span></a></li>
					<li><a href="https://twitter.com/pixelhumain" class="btn btn-twitter btn-social"><span class="icon icon-twitter"></span></a></li>
					<li><a href="https://plus.google.com/communities/111483652487023091469" class="btn btn-google btn-social"><span class="icon icon-google-plus"></span> </a></li>
				</ul>
			<center>
		</div>
	</div>
	
	<div class="col-md-12 contact-map" style="margin-bottom:40px">
		<!-- SECTION TITLE -->
		<div class="section-header with-arrow">
			<h1 class="parnet title_fontHome homestead"><img class="icon_section img_cont" src="<?php echo $this->module->assetsUrl; ?>/images/mapping.png"><br/>CONTACT</h1>
				
				<center>
					+ 262 692 38 32 58<br><a href="#">contact@pixelhumain.com</a>
					<!-- SOCIAL BUTTTONS -->
					<ul class="social-list">
						<li><a href="https://www.facebook.com/groups/pixelhumain/" class="btn btn-facebook btn-social"><span class="icon icon-facebook"></span></a></li>
						<li><a href="https://twitter.com/pixelhumain" class="btn btn-twitter btn-social"><span class="icon icon-twitter"></span></a></li>
						<li><a href="https://plus.google.com/communities/111483652487023091469" class="btn btn-google btn-social"><span class="icon icon-google-plus"></span> </a></li>
					</ul>
				<center>
		</div>			
	</div>

</div>


<script type="text/javascript">
jQuery(document).ready(function() {
	
	topMenuActivated = false;
	hideScrollTop = true; 
	checkScroll();
	
	$(".moduleLabel").html("<i class='fa fa-connectdevelop'></i> <span id='main-title-menu'>Bienvenue sur</span> <span class='text-red'>COMMUNE</span>CTER.Org");

	$('.tooltips').tooltip();

	$("#btn-param-postal-code").click(function(){
		$("#div-param-postal-code").show(400);
	});

	$('#searchBarPostalCode').keyup(function(e){
        startSearch();
    });
    
     $("#btn-geoloc-auto").click(function(e){
		if(geolocHTML5Done == false){
			$("#dropdown_search").html("<center><span class='search-loader text-dark' style='font-size:20px;'><i class='fa fa-spin fa-circle-o-notch'></i> Géolocalisation en cours ...</span></center>");		
    		initHTML5Localisation('prefillSearch');
		}
    	else{
    		$("#modal-select-scope").modal("show");
    	}
    });

});

function openVideo(){
	var width = $(".imageSectionVideo").width();
	var height = $(".imageSectionVideo").height();
	console.log(width, height);
	$(".imageSectionVideo").empty();
	$(".imageSectionVideo").html('<iframe  class="img-responsive img-thumbnail" src="http://player.vimeo.com/video/133636468?api=1&title=0&amp;byline=0&amp;portrait=0&amp;color=57c0d4" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen class="video" aria-hidden="true" tabindex="-1"></iframe>')
	$("iframe").css("width", width);
	$("iframe").css("height", height);
}



var timeout = null;
function startSearch(){
	var name = $('#searchBarPostalCode').val();
    var locality = $('#searchBarPostalCode').val();

    name = name.replace(/[^\w\s']/gi, '');
    locality = locality.replace(/[^\w\s']/gi, '');

    //verification si c'est un nombre
    if(!isNaN(parseInt(locality))){
        if(locality.length == 0 || locality.length > 5) locality = "";
    }

    if(name.length>=3 || name.length == 0){
      clearTimeout(timeout);
      timeout = setTimeout('autoCompleteSearch("'+name+'", "'+locality+'")', 500);
    }else{
      
    }   
}


function autoCompleteSearch(name, locality){
    var data = {"name" : name, "locality" : locality, "searchType" : [ "cities" ]  };
    var countData = 0;
    var oneElement = null;
    $("#shortDetailsEntity").hide();
    $.ajax({
      type: "POST",
          url: baseUrl+"/" + moduleId + "/search/globalautocomplete",
          data: data,
          dataType: "json",
          error: function (data){
             console.log("error");
          	console.dir(data);
            
          },
          success: function(data){
          	console.log("success, try to load sig");
          	console.dir(data);
            if(!data){
              toastr.error(data.content);
            }else{

            $.each(data, function(i, v) {
	            if(v.length!=0){
	              $.each(v, function(k, o){
	              	oneElement = o;
	              	countData++;
	              });
	            }
	        });

	        if(countData == 0){
	        	$("#dropdown_search").html("<center><span class='search-loader text-red' style='font-size:20px;'><i class='fa fa-ban'></i> Aucun résultat</span></center>");
    			$("#dropdown_search").show();
	        	toastr.error('Aucune donnée');
	        }else{
	        	$("#dropdown_search").html("<center><span class='search-loader text-red' style='font-size: 18px; font-weight: 600;'><i class='fa fa-check'></i> Code postal validé : "+locality+"  <br/>Vous êtes communecté !</span></center>");
    			$("#dropdown_search").show();
    			validatePostalcode(locality);
	        }

	      /*
          var mapElements = new Array();  	
          
          str = "<div class='col-md-12 center'>";
          str += "<h3 class='text-dark' style='margin-top:0px;'><i class='fa fa-angle-down fa-2x'></i><br/> Sélectionnez la commune recherchée ...</h3>";
          var city, postalCode = "";
          $.each(data, function(i, v) {
            var typeIco = i;
            var ico = mapIconTop["default"];
            var color = mapColorIconTop["default"];

            
            if(v.length!=0){
              $.each(v, function(k, o){

               mapElements.push(o);

				typeIco = o.type;
                ico = ("undefined" != typeof mapIconTop[typeIco]) ? mapIconTop[typeIco] : mapIconTop["default"];
                color = ("undefined" != typeof mapColorIconTop[typeIco]) ? mapColorIconTop[typeIco] : mapColorIconTop["default"];
                
                htmlIco ="<i class='fa "+ ico +" fa-2x bg-"+color+"'></i>";
               	if("undefined" != typeof o.profilThumbImageUrl && o.profilThumbImageUrl != ""){
                  var htmlIco= "<img width='80' height='80' alt='image' class='img-circle bg-"+color+"' src='"+baseUrl+o.profilThumbImageUrl+"'/>"
                }

                city="";

                var postalCode = o.cp
                if (o.address != null) {
                  city = o.address.addressLocality;
                  postalCode = o.cp ? o.cp : o.address.postalCode ? o.address.postalCode : "";
                }
                
                
                var id = getObjectId(o);
                var insee = o.insee ? o.insee : "";
                type = o.type;
                if(type=="citoyen") type = "person";
                var url = "javascript:"; //baseUrl+'/'+moduleId+ "/default/simple#" + o.type + ".detail.id." + id;
                var	onclick = 'validatePostalcode("'+o.cp+'");';
                var	onclickCp = 'validatePostalcode("'+o.cp+'");';
                var	target = "";
                

                var tags = "";
                if(typeof o.tags != "undefined" && o.tags != null){
					$.each(o.tags, function(key, value){
						if(value != "")
		                tags +=   "<span class='badge bg-red'>#" + value + "</span>";
		            });
                }

                var name = typeof o.name != "undefined" ? o.name : "";
                var postalCode = (typeof o.address != "undefined" &&
                				  typeof o.address.postalCode != "undefined") ? o.address.postalCode : "";
                
                if(postalCode == "") postalCode = typeof o.cp != "undefined" ? o.cp : "";
                var cityName = (typeof o.address != "undefined" &&
                				typeof o.address.addressLocality != "undefined") ? o.address.addressLocality : "";
                
                var fullLocality = postalCode + " " + cityName;

                var description = (typeof o.shortDescription != "undefined" &&
                					o.shortDescription != null) ? o.shortDescription : "";
                if(description == "") description = (typeof o.description != "undefined" &&
                									 o.description != null) ? o.description : "";
         
                var startDate = (typeof o.startDate != "undefined") ? "Du "+dateToStr(o.startDate, "fr", true, true) : null;
                var endDate   = (typeof o.endDate   != "undefined") ? "Au "+dateToStr(o.endDate, "fr", true, true)   : null;

                //template principal
                str += "<div class='searchEntity'>";
	     			target = "";
	                str += "<div class='entityRight bg-red badge'>";
	                	if(fullLocality != "" && fullLocality != " ")
	                	str += "<a href='"+url+"' onclick='"+onclickCp+"'"+target+"  class='entityLocality'><i class='fa fa-home'></i> " + fullLocality + "</a> ";
	                	str += "<a href='"+url+"' onclick='"+onclick+"'"+target+" class='entityName'>" + name + "</a> ";
	                	
	                str += "</div>";
	                					
				str += "</div>";

			
              })
            }

			

            }); 
			*/
			/*
            if(str == "") {
            	//$("#dropdown_search").html("");
            	$(".btn-start-search").html("<i class='fa fa-ban'></i>");
            	//$("#dropdown_search").css({"display" : "none" });	             
            }else{
            	//str += '<div class="col-md-5 no-padding" id="shortDetailsEntity"></div>';
            	str += '</div>';
	            $("#dropdown_search").html(str);
	            $(".btn-start-search").html("<i class='fa fa-search'></i>");
	            $("#dropdown_search").css({"display" : "inline" });
	           	$(".my-main-container").scrollTop(95);
	           	$("#link-start-search").html("Rechercher");
	            //$("#link-start-search").removeClass("badge");

	             if(countData == 1){
	            	console.log("only one");
	            	//$("#dropdown_search").css({"display" : "none" });
	            	//setScopeValue(oneElement.name, oneElement.insee);
	            }
	        }
	        $(".btn-start-search").removeClass("bg-azure");
    		//$(".btn-start-search").addClass("bg-dark");
    		*/
          }

          /*console.log("ALL MAP ELEMTN");
          console.dir(mapElements);
          Sig.showMapElements(Sig.map, mapElements);
          */

          
      }
    });

    str = "<i class='fa fa-circle-o-notch fa-spin'></i>";
    $(".btn-start-search").html(str);
    $(".btn-start-search").addClass("bg-azure");
    //$("#link-start-search").html("Recherche en cours ...");
    $(".btn-start-search").removeClass("bg-dark");
    $("#dropdown_search").html("<center><span class='search-loader text-dark' style='font-size:20px;'><i class='fa fa-spin fa-circle-o-notch'></i> Recherche en cours ...</span></center>");
    $("#dropdown_search").css({"display" : "inline" });
                    
  }

  	function validatePostalcode(postalCode){
  		var path = "/";
		//console.log(location.hostname.indexOf("localhost") );
		//console.dir(location);
		if(location.hostname.indexOf("localhost") >= 0) path = "/ph/";
	    console.log("mise à jour du cookie postalCode", path);
		$.cookie('postalCode',   postalCode,  { expires: 365, path: path });
		$("#div-discover").show(500);
  	}

	function setScopeValue(valText, insee){
		$("#searchBarPostalCode").val(valText);
		if(insee != "")
		  	showNewsStream(insee);
		else
			startSearch();
	}

</script>