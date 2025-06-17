
let buttonsubmit = document.getElementById("submitt");

$('#submitt').on('click', function (e) {
    e.preventDefault();
let prixmin = document.getElementsByName("min_price")[0];
let prixmax = document.getElementsByName("max_price")[0];
    $.ajax({
        url: "{{ route('filtrer.produits') }}",
        type: "GET",
        data: {
            min_price: prixmin,
            max_price: prixmax,
        },
        success: function (data) {
            let html = '';

            if (data.length === 0) {
                html = '<p>Aucun produit trouvé.</p>';
            } else {
                data.forEach(function (produit) {
                    html += `
                        <div class="border p-4 mb-2 rounded">
                            <h3 class="font-bold">${produit.nom}</h3>
                            <p>${produit.description ?? ''}</p>
                            <span>${produit.prix} DH</span>
                        </div>
                    `;
                });
            }

            $('#produits-container').html(html);
        },
        error: function (xhr) {
            console.log("Erreur AJAX:", xhr);
        }
    });
});

