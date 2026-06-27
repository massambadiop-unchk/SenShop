 <script>
    feather.replace();

    function toggleDropdown() {
      const dropdown = document.getElementById('adminDropdown');
      const chevron  = document.getElementById('adminChevron');
      const wrapper  = document.getElementById('adminWrapper');
      const isOpen   = dropdown.classList.toggle('open');
      chevron.style.transform = isOpen ? 'rotate(180deg)' : 'rotate(0deg)';
      wrapper.classList.toggle('active', isOpen);
    }

    document.addEventListener('click', (e) => {
      const wrapper = document.getElementById('adminWrapper');
      if (!wrapper.contains(e.target)) {
        document.getElementById('adminDropdown').classList.remove('open');
        document.getElementById('adminChevron').style.transform = 'rotate(0deg)';
        wrapper.classList.remove('active');
      }
    });
  </script>
</body>
</html>
<!-- Footer Admin - Fatou Badji - L3 IDA UNCHK Groupe 67 2025 -->
