

window.addEventListener("load", function() {
    document.getElementById("hide").style.visibility= "hidden";
    
    document.getElementById("highlight").addEventListener("click", function () {
        document.getElementById("hide").style.visibility= "visible";
        document.getElementById("highlight").style.visibility = "hidden"; 
        
        // now show all the hover spans
        showHoverNodes();       
    });
    
     document.getElementById("hide").addEventListener("click", function () {
        document.getElementById("hide").style.visibility= "hidden";
        document.getElementById("highlight").style.visibility = "visible";    
         
        // now hide all the hover spans
        removeElementsByClass("hoverNode");
    });
    
    
    //high level function to go through all nodes and build the extra nodes.
    function showHoverNodes()
    {
        var rootElement = document.documentElement;
        var firstTier = rootElement.childNodes;

        // firstTier is the NodeList of the direct children of the root element
        for (var i = 0; i < firstTier.length; i++) {
            if (firstTier[i].tagName=="BODY"){
                bodyNodes = firstTier[i].childNodes;
                for (var j = 0; j < bodyNodes.length; j++) {
                    highlightRecursive(bodyNodes[j]);
                }
            }
        }
    }   
    

    function removeElementsByClass(className){
        var elements = document.getElementsByClassName(className);
        while(elements.length > 0){
            elements[0].parentNode.removeChild(elements[0]);
        }
    }    
    

    /*
       This function recursively goes through all nodes (from the one passed in) 
       and adds extra clickable divs to display what kind of HTMl tag this is.
    */
    function highlightRecursive(node){
        console.log("nodeType=" + node.nodeType + " tagName=" + node.tagName);
        
        // ignore space and text ... we are only interested in element nodes
        if (node.nodeType = 1){
            var tag = node.tagName;
            var newNode = document.createElement("span");
            // add a new span element that will display element name
            newNode.className='hoverNode';
            var newText = document.createTextNode(tag);
            newNode.appendChild(newText); 
        }
        var childNodes = node.childNodes;
        for (var j = 0; j < childNodes.length; j++) {
            highlightRecursive(childNodes[j]);
        }
        if (node.nodeType!=3){
            newNode.addEventListener('click',alertDetails);
            node.appendChild(newNode);
        }
    }    
    
    //function to "alert" the user when a div is clicked as to the details.
    function alertDetails(){
        var displayMe="Tag:"+this.parentNode.tagName+"\r\n";
        displayMe += "Class:"+this.parentNode.className+"\r\n";
        displayMe += "ID:"+this.parentNode.id+"\r\n";
        displayMe += "innerHTML:"+this.parentNode.innerHTML+"\r\n";
        alert(displayMe);
    }    
});