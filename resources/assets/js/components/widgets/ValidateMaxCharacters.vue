<script>
let maxchars = Vue.directive("maxchars", {
    bind: function(el, binding, vnode) {
        let max_chars = binding.expression;
        $(el).on('keydown', function(e) {
            if (e.target.value.length >= max_chars) {
                if(e.keyCode >= 48 && e.keyCode <= 90 ||
                    e.keyCode >= 187 && e.keyCode <= 192 ||
                    e.keyCode >= 219 && e.keyCode <= 222){
                    e.preventDefault(); 
                }
            }
        });
    }
});
</script>