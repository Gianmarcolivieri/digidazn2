<template>
<table class="table team">
        <thead>
          
            <th>Posizione</th>
            <th>Punti</th>
            <th>Vittorie</th>
            <th>Pareggi</th>
            <th>Sconfitte</th>
       
        </thead>
    
        <tbody>
           
            <tr>
                <td>{{ team.position }}</td>
                <td>{{ team.point }}</td>
                <td>{{ team.win }}</td>
                <td>{{ team.draw }}</td>
                <td>{{ team.lose }}</td>
            </tr>
        </tbody>
</table>



</template>

<script>
    export default {
        props: ['team'],
        data() {
            return {
                

            }
        },
    }
</script>
