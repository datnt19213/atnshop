function choice(x){
    if(x==0){
        document.getElementById('sta').style.display='none';
        document.getElementById('delete').style.display='none';
        document.getElementById('update').style.display='none';
        document.getElementById('add').style.display='block';
    }
    else if(x==1){
        document.getElementById('sta').style.display='none';
        document.getElementById('delete').style.display='none';
        document.getElementById('update').style.display='block';
        document.getElementById('add').style.display='none';
    }
    else if(x==2){
        document.getElementById('sta').style.display='none';
        document.getElementById('delete').style.display='block';
        document.getElementById('update').style.display='none';
        document.getElementById('add').style.display='none';
    }
    else{
        document.getElementById('sta').style.display='block';
        document.getElementById('delete').style.display='none';
        document.getElementById('update').style.display='none';
        document.getElementById('add').style.display='none';
    }
}