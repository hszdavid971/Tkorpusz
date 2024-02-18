<p>Oldal tartalom</p>
<script>
    getData('../server/minta.php',renderTable);

    function renderTable(data){
        console.log(data);
        let i=0;
        for(let obj of data){
            i++;
        
        }
    }
</script>