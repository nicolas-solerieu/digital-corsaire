<?php
/**
 * Custom theme options
 */




function myThemeRegisterSettings() {
    // Header branding infos
    register_setting( 'theme_options', 'headline' );
    register_setting( 'theme_options', 'headline_text' );
}
add_action( 'admin_init', 'myThemeRegisterSettings' );

function myThemeAdminMenu() {
    add_menu_page(
        'Custom content',         // le titre de la page
        'Custom content',         // le nom de la page dans le menu d'admin
        'administrator',        // le rôle d'utilisateur requis pour voir cette page
        'theme-informations',   // un identifiant unique de la page
        'myThemeSettingsPage',   // le nom d'une fonction qui affichera la page
        'dashicons-welcome-add-page'
    );
}
add_action( 'admin_menu', 'myThemeAdminMenu' );

function myThemeSettingsPage() {
    // affichage de la page
    ?>

    <div class="wrap custom-theme-options">
            <h2>Informations</h2>

            <hr>

            <?php if( $_GET['settings-updated'] == true ): ?>
                <div id="message" class="updated notice notice-success is-dismissible below-h2">
                    <p>Informations mises à jour.</p>
                    <button type="button" class="notice-dismiss"><span class="screen-reader-text">Ne pas tenir compte de ce message.</span></button>
                </div>
            <?php endif ?>

            <form method="post" action="options.php">
                <?php
                    // cette fonction ajoute plusieurs champs cachés au formulaire
                    // pour vous faciliter le travail.
                    // elle prend en paramètre le nom du groupe d'options
                    // que nous avons défini plus haut.

                    settings_fields( 'theme_options' );
                ?>
                
                <div id="poststuff">

                    <div class="postbox">
                        <h3 class="hndle"><span>En-tête</span></h3>
                        <div class="inside">

                            <h4>Headline</h4>
                            <input type="text" id="headline" name="headline" value='<?php echo get_option( 'headline' ); ?>' style="width:100%;display:block;padding:5px">
                            <p>This text is your headline on the homepage top section</p>

                            <hr/>
                            
                            <h4>Headline text</h4>
                            <textarea id="headline_text" rows="10" name="headline_text" style="width:100%;display:block;padding:5px" ><?php echo get_option( 'headline_text' ); ?></textarea>
                            <p>Fill up the text area to complete the headline block of homepage</p>

                        </div>
                    </div>

                    <p class="submit">
                        <input type="submit" class="button-primary" value="Enregistrer" />
                    </p>
                    
                </div>
            </form>
        </div>
<?php
}