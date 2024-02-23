<?php
function add_entry($data) {
    $json = file_get_contents('entries.json');
    $entries = json_decode($json, true);
    $date = DateTime::createFromFormat('d-m-Y', $data['date']);
    $data['date'] = $date->format('Y-m-d H:i:s');
    $entries[] = $data;

    file_put_contents('entries.json', json_encode($entries));

    echo json_encode(array("message" => "Nouvelle aventure créée !"));
}

function get_entries() {
    $json = file_get_contents('entries.json');

    $entries = json_decode($json, true);

    if (empty($entries)) {
        echo json_encode(array("message" => "Aïe ! Aucune aventure n'a été trouvée."));
    } else {
        echo json_encode($entries);
    }
}

function delete_entries() {
    file_put_contents('entries.json', json_encode(array()));
    echo json_encode(array("message" => "Toutes les aventures ont été supprimées !"));
}