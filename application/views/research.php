
<?php
    if (!strcmp($user['type'], 'CLIENT')) {
        $this->load->view('research/client',['show_lists' => $show_lists]);
    } elseif (!strcmp($user['type'], 'MONITOR')) {
        $this->load->view('research/monitor', ['show_lists' => $show_lists]);
    } elseif (!strcmp($user['type'], 'ADMIN')){
        $this->load->view('research/client',['show_lists' => $show_lists['client']]);
        $this->load->view('research/monitor', ['show_lists' => $show_lists['monitor']]);
    }
?>

</body>
</html>
