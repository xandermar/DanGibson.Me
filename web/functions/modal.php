<?php

function modal($name,$full){
    $machine_name = preg_replace('/[^A-Za-z0-9_]/', '', str_replace(' ', '_', strtolower($name)));
    $full ? $dialog = 'modal-fullscreen' : $dialog = null;
    $modalPath = 'modals/'.$machine_name.'.inc';
    file_exists($modalPath) ?
        $body = file_get_contents($modalPath) :
        header("Location: error.php?e=".$machine_name);

    $modal = '
    <a href="#" data-bs-toggle="modal" data-bs-target="#'.$machine_name.'" class="btn btn-primary">'.$name.'</a>
    <div class="modal fade" id="'.$machine_name.'" tabindex="-1" aria-labelledby="'.$machine_name.'Label" aria-hidden="true">
        <div class="modal-dialog '.$dialog.'">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="'.$machine_name.'Label">'.$name.'</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-start">'.$body.'</div>
            </div>
        </div>
    </div>
    ';
    return $modal;
}

function modal_link($name){
    $machine_name = preg_replace('/[^A-Za-z0-9_]/', '', str_replace(' ', '_', strtolower($name)));
    $modalPath = 'modals/'.$machine_name.'.inc';
    file_exists($modalPath) ?
        $body = file_get_contents($modalPath) :
        header("Location: error.php?e=".$machine_name);

    $modal = '<a href="#" data-bs-toggle="modal" data-bs-target="#'.$machine_name.'">'.$name.'</a>';
    $modal .= '<div class="modal fade" id="'.$machine_name.'" tabindex="-1" aria-labelledby="'.$machine_name.'Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="'.$machine_name.'Label">'.$name.'</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-start">'.$body.'</div>
            </div>
        </div>
    </div>';
    return $modal;
}