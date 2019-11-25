function gray(){
    var x = document.getElementById('img1').src;
    x = grayscale(x);
}


function grayscale(image){
    var canvasContext = canvas.getContext('2d');
    var imgW = image.width;
    var imgH = image.height;
    canvas.width = imgW;
    canvas.height = imgH;

    canvasContext.drawImage(image, 0, 0);

    var imgPixels = canvasContext.getImageData(0, 0, imgW, imgH);


    for(var y = 0; y < imgPixels.height; y++){
        for(var x = 0; x < imgPixels.width; x++){
          var i = (y * 4) * imgPixels.width + x * 4;
          var avg = (imgPixels.data[i] + imgPixels.data[i + 1] + imgPixels.data[i + 2]) / 3;
          imgPixels.data[i] = avg;
          imgPixels.data[i + 1] = avg;
          imgPixels.data[i + 2] = avg;
        }
    }

    canvasContext.putImageData(imgPixels, 0, 0, 0, 0, imgPixels.width, imgPixels.height);

    dataurl = canvas.toDataURL();
    var newimg = "data:image/jpeg;base64," + dataurl;
    return newimg;
}