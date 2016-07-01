function getName()
{
    var filename = document.getElementById('image').value.replace(/.*[\\\/]/, "");
    document.getElementById('fileformlabel').innerHTML = filename; 
}
