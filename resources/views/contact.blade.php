@extends('navegacion')


<h2>
    soy contact
</h2>


    <form action="{{route('contact)}}" method="GET">
        <input name="name" placeholder="Nombre.."><br>
        <input name="email" placeholder="Email.."><br>
        <input name="subject" placeholder="Subject.."><br>
        <textarea name="texttarea" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="Enviar">
    </form>


