"use strict"
/*

let rating_patience;
let rating_obedience;
let rating_guarding;
let rating_loyality;
let rating_affectionate;
let rating_intelligence;
let rating_gentleness;
let rating_jealousy;
let rating_protective;

*/

let traits = ["patience", "obedience", "guarding", "loyalty", "affectionate", "intelligence", "gentleness", "jealousy", "protective"];

let i, length;

let div_rating_col = document.createElement("div");
div_rating_col.setAttribute("class", "col-md-7 rating_col");


for (i = 0, length = traits.length; i < length; i++) {
    let trait = traits[i];

    console.log(trait);

    let div_rating_system = document.createElement("div");
    div_rating_system.setAttribute("class", "rating-system-1");

    let h3 = document.createElement("h3");
    h3.innerHTML = trait;

    console.log(div_rating_col + " div rating col" );
    console.log(div_rating_system + " div rating system" );

    div_rating_col.appendChild(div_rating_system);
    div_rating_system.appendChild(h3);

    for (let j = 5; j > 0; j--) {
        let input = document.createElement("input");
        input.setAttribute("type", "radio");
        input.setAttribute("name", "rate");
        input.setAttribute("for", `star${j}`);

        let label = document.createElement("label");
        label.setAttribute("class", "label_rating");
        label.setAttribute("for", `star${j}`);

        div_rating_system.appendChild(input);
        div_rating_system.appendChild(label);
    }

    let div_text = document.createElement("div");
    div_text.setAttribute("class", "text");

    div_rating_system.appendChild(div_text);
};

let div_id_row = document.getElementsByClassName("class_row");
let div_row = document.createElement("div");
div_row.setAttribute("class", "row");

div_id_row.appendChild(div_row);

let div_col_md_12 = document.createElement("div");
div_col_md_12.setAttribute("class", "col-md-12");
div_row.appendChild(div_col_md_12);
div_col_md_12.innerHTML("{{ Form::submit('Create Post', ['class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;']) }}{!! Form::close() !!}");
