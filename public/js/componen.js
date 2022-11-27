window.onload = function(){
    document.getElementById('close').onclick = function(){
        this.parentNode.parentNode.remove();
        return false;
    };
};