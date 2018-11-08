function afficherRegions()
{
    $.ajax
    (
        {
            type:"get",
            url:"index.php/Welcome/afficherRegions",
            success:function(data)
            {
                $("#ville").empty();
                $("#region").empty();
                $("#region").append(data);
            },
            error:function()
            {
                alert("Erreur");
            }
        }
    )
}

function afficherVille(id)
{
    $.ajax
    (
        {
            type:"get",
            url:"index.php/Welcome/afficherVille",
            data:"id="+id,
            success:function(data)
            {
                $("#ville").empty();
                $("#ville").append(data);
            },
            error:function()
            {
                alert("Erreur Récupération information");
            }
        }
    )
}