function afficherRegions()
{
    $.ajax
    (
        {
            type:"get",
            url:"index.php/Welcome/afficherRegions",
            success:function(data)
            {
                $("#Villes").empty();
                $("#Regions").empty();
                $("#Regions").append(data);
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
                $("#Villes").empty();
                $("#Villes").append(data);
            },
            error:function()
            {
                alert("Erreur Récupération information");
            }
        }
    )
}