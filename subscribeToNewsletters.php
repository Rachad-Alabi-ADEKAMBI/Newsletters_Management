<?php
/**
 * Plugin Name:       Newsletters Management
 * Plugin URI:        https://github.com/Rachad-Alabi-ADEKAMBI/Newsletters_Management
 * Description:       this is a  wordpress plugin for newsletters management
 * Version:           1.01.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Codeur Creatif
 * Author URI:        https://www.codeurcreatif.com/
 * License:           GPL v2 or later
 * License URI:       open project, feel free to use and contribute
 * Update URI:         https://github.com/Rachad-Alabi-ADEKAMBI/Newsletters_Management
 * Text Domain:        Newsletters Management
 */

 add_shortcode('Newsletters Management', 'subscribeToNewsletters');
 wp_enqueue_script('vue', 'https://unpkg.com/vue@3');
 wp_enqueue_script('axios', 'https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js');

 function subscribeToNewsletters(){
    echo("
    <div id='app'>  
    <div class='newsletters overlay'>
        <form action='model.php?action=subscribeToNewsletters' class='newsletters___form'
            method='POST'>
                        <h1 class=''>
                            Inscription à la newsletters
                        </h1>  <br>  


                        <div class='row'>
                            <div class='col'>
                            <input type='text' class='form-control' v-model='newAppartment.name'
                            placeholder='Nom de l'appartement'  name='name'>
                            </div>
                        
                        </div> <br>

                        <div class='row'>
                        <div class='col-4'>
                                <input type='text' class='form-control' name='first_name'
                                  v-model='newSubscriber.first_name'
                                placeholder='Prénoms' required>
                                </div>

                                <div class='col-4'>
                                <input type='text' class='form-control' name='last_name'
                                  v-model='newSubscriber.last_name'
                                placeholder='Nom' required>
                                </div>
                        </div> <br>

                        <div class='row'>
                            <div class='col-12'>
                                        <input type='text' class='form-control' name='country'
                                        v-model='newSubscriber.country'
                                        placeholder='Pays' required>
                             </div>
                        </div> <br>

                        <div class='row'>
                            <div class='col-12'>
                                        <input type='text' class='form-control' name='email'
                                        v-model='newSubscriber.email'
                                        placeholder='Adresse mail' required>
                             </div>
                        </div> <br>

                            <p>
                                Notez que votre adresse mail ne sera jamais communiquée à autrui. 
                                Vous ne serez pas non plus inondé de messages de notre part 
                                (environ un mail hebdomadaire).

                            </p>

                            <button class='  v-on:click='subscribeToNewsletters();'>
                                Inscription
                            </button>
        </form>
    </div>
</div>  ");
      wp_enqueue_script('app', plugin_dir_url(__FILE__). 'app.js');
      wp_enqueue_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
    wp_enqueue_style('', plugin_dir_url(__FILE__). 'style.css');

  
 }
 ?>


