function checkParams() 
{
    var predmetVal = $("#predmet_select option:selected").val();
    var classVal = $("#class_select option:selected").val();
    var textVal = $('#checkText').val();
    if((textVal) && (classVal) && (predmetVal)) 
    {
        $('#submitDisabled').removeAttr('disabled');
        $('#submitDisabled').css({'background-color': '#8ca9cf'});
    } 
    else 
    {
        $('#submitDisabled').attr('disabled', 'disabled');
        $('#submitDisabled').css({'background-color': '#d3deed'});
    }
}