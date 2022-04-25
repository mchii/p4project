<?php
include("includes/header.php");
?>


<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner bg-faded text-center rounded">
                    <div id="main">
                        <h1 class="section-heading mb-0">Oekraïne Donatiepunt <br> (VrijwilligersHuis Nieuwegein)</h1>
                        <!-- <p id="description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. In maiores tempora earum praesentium eveniet qui sunt, dolore eius atque odio autem consectetur nulla dolorum soluta voluptatem vitae, ad commodi odit?
                        </p> -->
                        <p class="section-heading mb-0">Bedankt dat u ons helpt!</p>
                        <form id="survey-form" name="contact" action="core/contactform.php" method="POST" onsubmit="validateForm(); return false">
                            <fieldset>
                                <legend>
                                    Hulp voor Oekraïne
                                </legend>
                                <table id="personal-info">
                                    <tr>
                                        <td>
                                            <label>Naam (Verplicht):</label>
                                        </td>
                                        <td>
                                            <input type="text" id="name" name="name" placeholder="Naam">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Email (Verplicht):</label>
                                        </td>
                                        <td>
                                            <input type="email" name="email" id="email" placeholder="Voorbeeld@email.com">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Telefoonnummer:</label>
                                        </td>
                                        <td>
                                            <input type="tel" name="phone" id="number" placeholder="06 12345678">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Categorie (Verplicht):</label>
                                        </td>
                                        <td>
                                            <select name="category" id="dropdown">
                                                <option disabled value selected>Selecteer een categorie</option>
                                                <option value="goederen">Goederen</option>
                                                <option value="diensten">Diensten</option>
                                                <option value="levensmiddelen">Levensmiddelen</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <td>
                                        <label>Product beschrijving (Verplicht)</label>
                                    </td>
                                    <td>
                                        <textarea name="message" cols="50" rows="5"></textarea>
                                    </td>
                                </table>
                            </fieldset>
                            <input id="submit" type="submit" name="submit" value="Verstuur" />


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
include("includes/footer.php");
?>

</html>