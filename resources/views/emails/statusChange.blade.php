<!DOCTYPE html>
<html>


<body style="background-color: #f4f4f4;">
<p>
    Bonjour, <br>

    Cher client! <br>
    Cet e-mail vous est envoyé concernant votre bon de commande No. <strong>{{$order->order_number}}</strong> & Facture No. <strong>{{$order->invoice_number}}</strong>.
    <br>
    Le statut de votre commande a été modifié. <br>

    Statut actuel: <br>
    <strong>{{$order->admin_status == 1 ? 'Complété' : ''}}</strong>
    <strong>{{$order->admin_status == 2 ? 'Annulé' : ''}}</strong>
    <strong>{{$order->admin_status == 3 ? 'En Attente' : ''}}</strong>
    <strong>{{$order->admin_status == 4 ? 'En Attente de Paiement' : ''}}</strong>
    <strong>{{$order->admin_status == 5 ? 'Traitement' : ''}}</strong>
    <strong>{{$order->admin_status == 6 ? 'Remboursé' : ''}}</strong>
    <br> <br>
    En cas de questions ou de divergences concernant votre commande, n'hésitez pas à nous contacter.
</p>
</body>

</html>
