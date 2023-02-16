<script src="js/three.min.js"></script>
<script src="js/panolens.min.js"></script>

<script>
const panoImage=document.querySelector('.pano-image');
const miamiPano='pano3.jpeg';





const panorama= new PANOLENS.ImagePanorama(miamiPano);
const viewer = new PANOLENS.Viewer({
container:PanoImage,
autoRotate:true,
autoRotateSpeed: 0.2
});
viewer.add(panorama); 



</script>


<style>
.pano-image{
width:100;
height:600px;


}

</style>


<div class="pano-image"></div>