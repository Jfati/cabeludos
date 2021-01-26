<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        background-color: rgb(11, 11, 11);
    }

    .content {
        position: relative;
        background-color: rgb(25, 25, 25);
    }

    .row {
        float: left;
        position: relative;
        left: 50%;
        transform: translateX(-50%);
    }

    .cnt {
        position: relative;
        background-color: rgb(1, 1, 1);
        width: 400px;
        height: 550px;
        border-radius: 10px;
        margin: 20px;
        float: left;
    }

    .cnt>div>img {
        position: absolute;
        left: 0%;
        height: 100%;
        width: 100%;
        object-fit: cover;
        border-radius: 10px;
    }

    .cttinferior {
        position: absolute;
        bottom: 0%;
        background-color: white;
        width: 100%;
        height: 25%;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        overflow: hidden;
        overflow-y: auto;
    }

    .desc {
        color: black;
        font-size: 10px;
        margin: 5px;
    }

    .bttleft {
        position: relative;
        float: left;
        top: 50%;
        font-size: 40%;
        width: 10%;
        height: 20%;
        font-size: 40px;
        text-align: center;
        color: rgba(0, 0, 0, 0);
        background-color: rgba(255, 255, 255, 0);
        border: none;
        border-bottom-right-radius: 10px;
        border-top-right-radius: 10px;
    }

    .bttleft:hover {
        color: white;
    }

    .bttright {
        position: relative;
        float: right;
        top: 50%;
        font-size: 40%;
        width: 10%;
        height: 20%;
        font-size: 40px;
        text-align: center;
        color: rgba(0, 0, 0, 0);
        background-color: rgba(255, 255, 255, 0);
        border: none;
        border-bottom-left-radius: 10px;
        border-top-left-radius: 10px;
    }

    .bttright:hover {
        color: white;
    }

    .nome {
        background-color: rgba(0, 0, 0, 0.4);
        position: absolute;
        float: left;
        color: white;
        margin: 25px;
        min-width: 80px;
        font-size: 25px;
        -webkit-text-stroke: 0.01px black;
    }

    .idade {
        background-color: rgba(0, 0, 0, 0.4);
        position: absolute;
        float: left;
        color: white;
        font-size: 10px;
        -webkit-text-stroke: 0.09px black;
    }

    .base {
        position: absolute;
        bottom: 0%;
        background-color: rgba(99, 99, 99, 0.4);
        width: 100%;
        height: 50px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .bttbaixol {
        border: none;
        background-color: rgba(46, 46, 46, 1);
        height: 100%;
        min-width: 150px;
        float: left;
        position: relative;
        border-top-left-radius: 10px;
        color: black;
        border-collapse: separate;
        border-spacing: 5px;
    }

    .bttbaixor {
        border: none;
        background-color: rgba(46, 46, 46, 1);
        height: 100%;
        min-width: 150px;
        float: right;
        position: relative;
        border-top-right-radius: 10px;
        color: black;
        border-collapse: separate;
        border-spacing: 5px;
    }

    .textbt {
        border: none;
        background-color: rgba(46, 46, 46, 1);
        height: 49px;
        min-width: 150px;
        float: left;
        position: relative;
        border-top-left-radius: 10px;
        border-collapse: separate;
        border-spacing: 5px;
        text-align: center;
    }

    .textbt::placeholder {
        /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: black;
        opacity: 1;
        text-align: center;
        /* Firefox */
    }

    .bttbaixor:hover {
        background-color: rgb(22, 22, 22);
    }

    .bttbaixol:hover {
        background-color: rgb(22, 22, 22);
    }

    .opt {
        position: absolute;
        right: 0%;
        text-align: center;
        z-index: 10;
        margin-right: 10px;
        border-radius: 50%;
    }

    .opt:hover .optm {
        visibility: visible;
        display: block;
    }

    .optm {
        visibility: hidden;
        display: none;
        position: absolute;
        max-width: 125px;
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .codt {
        position: relative;
        left: 50%;
        transform: translateX(-50%);
    }

    .cod {
        background-color: rgb(22, 22, 22);
        color: whitesmoke;
        text-align: center;
        width: 100px;
        left: 35%;
        position: relative;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;

    }

    /* btt */

    .btt {
        border: none;
        border-radius: 5px;
        background-color: rgba(80, 80, 80, 0.685);
        color: black;
    }

    /* table */
    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #customers td,
    #customers th {
        padding: 8px;
    }

    #customers tr {
        background-color: #f2f2f2;
    }


    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #353535;
        color: white;
    }

    .fttop{
        width: 40px;
        height: 40px;
        object-fit: cover;
    }
</style>