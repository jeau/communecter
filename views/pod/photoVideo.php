<style type="text/css">
	#editSliderPhotoVideo{
		display:none;
	}
	.flexslider .slides img {
	    height: 250px;
	}
	#showAllSlides img{
		width: 75%;
	}
</style>

<div id="photoVideo">
    <div class="panel panel-white">
	    <div class="panel-heading border-light">
	        <h4 class="panel-title podPhotoVideoTitle"> <i class='fa fa-cog fa-spin fa-2x icon-big text-center'></i> Loading Media</h4>
	    </div>
	    <div class="panel-tools">
		   	<?php if((isset($itemId) && isset(Yii::app()->session["userId"]) && $itemId == Yii::app()->session["userId"])  || (isset($itemId) && isset(Yii::app()->session["userId"]) && Authorisation::isOrganizationAdmin(Yii::app()->session["userId"], $itemId))) { ?>
			   <a href="#editSliderPhotoVideo" class="add-photoSlider btn btn-xs btn-light-blue tooltips" data-toggle="tooltip" data-placement="top" title="Add an image" alt="Add an image"><i class="fa fa-plus"></i></a>
		    <?php } ?>
	    </div>
		<div class="panel-body border-light">
			
			<div class="row center" id="sliderPhotoVideo">
				<div class="flexslider" id="flexsliderPhotoVideo">
					<ul class="slides" id="slidesPhoto">
						
					</ul>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="center">
					<div class="flexslider" id="flexslider2">
						<ul class="slides" id="slidesPhoto">
							<li>
								<img src="http://placehold.it/350x180" style="height:250px" class="img-responsive center-block"/>
							</li>
						</ul>
				  	</div>
				 </div>
				 <a href="#">Voir la gallerie Photo</a>
			</div>
		</div>
	</div>
</div>


<div id="editSliderPhotoVideo" >
	<div class="row center">
		<div class="col-md-6 col-md-offset-3">
			<?php 
				$this->renderPartial('../pod/fileupload', array("itemId" => (string)$itemId,
																  "type" => $type,
																  "contentId" =>"photoVideo",
																  "editMode" => true)); ?>														  						
		</div>
	</div>
	<hr>
	<div class="row center" id="showAllSlides">
		
	</div>
</div>

<script type="text/javascript">
 	jQuery(document).ready(function() {
 		initPhotoVideo();
		$("#flexsliderPhotoVideo").flexslider();
	});

	function initPhotoVideo(){
		i=0;
		if(images.length == 0){
			var htmlSlide = "<li><img src='http://placehold.it/350x180' /></li>";
			$("#slidesPhoto").append(htmlSlide);
		}else{
			$.each(images, function(k,v){
				var contentTab = v.contentKey.split(".");
				var where = contentTab[contentTab.length-1];
				if(i<5 && v.doctype=="image"){
					if(where == "photoVideo"){
						path = baseUrl+"/upload/"+v.moduleId+v.folder+v.name;
						var htmlSlide = "<li><img src='"+path+"' /></li>";
						var htmlSlide2 = "<div class='col-md-3'><img src='"+path+"' /></div>";
						$("#showAllSlides").append(htmlSlide2);
						$("#slidesPhoto").append(htmlSlide);
						i++;
					}
				}
				
			})
		}
		$("#flexsliderPhotoVideo").flexslider();
		$(".podPhotoVideoTitle").html("Media");
	}


	function bindPhotoSubview(){
		$( "#drag1" ).draggable();
		$( "#drag2" ).draggable();
		
		$(".add-photoSlider").off().on("click", function() {
			subViewElement = $(this);
			subViewContent = subViewElement.attr('href');
			$.subview({
				content : subViewContent,
				onShow : function() {
					//openGallery();
				},
				onHide : function() {
					//hideGallery();
				}
			});
		});
	}
</script>