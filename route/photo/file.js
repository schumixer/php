window.onload = function (){
    function deleteImages() {
        if($("#deleteImages").is(':checked'))
            $(".photo img").remove();
    }

    //$("#delete").on("click",deleteImages);

    $("#formElem")[0].onsubmit = async (e) => {
        e.preventDefault();
        deleteImages();

    }
}; 