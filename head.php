<h1>Tour of Dishes</h1>
<a href="dashboard.php" class="nav">Dashboard</a> 
<a href="dishes.php" class="nav">Dishes</a>

<!-- active link -->
<style>
.nav { text-decoration: none; }
.active { text-decoration: none; border: 1px solid red; }
</style>
<script>
document.querySelectorAll('.nav').forEach(
    function(link){
        if(link.href==location.href)link.className='active';
    }
)
</script>
