<?php if ($this->params['controller'] === 'users'&& $this->params['action'] === 'login'): ?>
    <?php echo $this->Element('login'); ?>
<?php endif; ?>
<?php if ($this->params['controller'] === 'Users' && $this->params['action'] === 'add' || $this->params['controller'] === 'Users' && $this->params['action'] === 'edit'): ?>
    <?php echo $this->Element('login'); ?>
<?php endif; ?>
<?php if ($this->params['controller'] === 'Users' && $this->params['action'] === 'perfil' || $this->params['controller'] === 'Users' && $this->params['action'] === 'index'): ?>
    <?php echo $this->Element('navigation'); ?>
<?php endif; ?>
<?php if ($this->params['controller'] === 'UserImages' && $this->params['action'] === 'add' || $this->params['controller'] === 'UserImages' && $this->params['action'] === 'edit'): ?>
    <?php echo $this->Element('navigation'); ?>
<?php endif; ?>
<?php if ($this->params['controller'] === 'Users' && $this->params['action'] === 'view'): ?>
    <?php echo $this->Element('navigation'); ?>
<?php endif; ?>
<?php if ($this->params['controller'] === 'Resumes' && $this->params['action'] === 'index'): ?>
    <?php echo $this->Element('navigation'); ?>
<?php endif; ?>
<?php if ($this->params['controller'] === 'SkillUsers' && $this->params['action'] === 'index'): ?>
    <?php echo $this->Element('navigation'); ?>
<?php endif; ?>
<?php if ($this->params['controller'] === 'Resumes' && $this->params['action'] === 'add'): ?>
    <?php echo $this->Element('navigation'); ?>
<?php endif; ?>
<?php if ($this->params['controller'] === 'Resumes' && $this->params['action'] === 'edit'): ?>
    <?php echo $this->Element('navigation'); ?>
<?php endif; ?>
<?php if ($this->params['controller'] === 'Projects' && $this->params['action'] === 'add' || $this->params['controller'] === 'Projects' && $this->params['action'] === 'index'
|| $this->params['controller'] === 'Projects' && $this->params['action'] === 'edit' || $this->params['controller'] === 'Projects' && $this->params['action'] === 'view'): ?>
<?php echo $this->Element('navigation'); ?>
<?php endif; ?>
<?php if ($this->params['controller'] === 'Skills' && $this->params['action'] === 'add' || $this->params['controller'] === 'Skills' && $this->params['action'] === 'index'
    || $this->params['controller'] === 'Skills' && $this->params['action'] === 'edit'): ?>
    <?php echo $this->Element('navigation'); ?>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Socials' && $this->params['action'] === 'add' || $this->params['controller'] === 'Socials' && $this->params['action'] === 'index'
    || $this->params['controller'] === 'Socials' && $this->params['action'] === 'edit'): ?>
    <?php echo $this->Element('navigation'); ?>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Archives' && $this->params['action'] === 'add' || $this->params['controller'] === 'Archives' && $this->params['action'] === 'index'
    || $this->params['controller'] === 'Archives' && $this->params['action'] === 'edit'): ?>
    <?php echo $this->Element('navigation'); ?>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Shifts' && $this->params['action'] === 'add' || $this->params['controller'] === 'Shifts' && $this->params['action'] === 'index'
    || $this->params['controller'] === 'Shifts' && $this->params['action'] === 'edit'): ?>
    <?php echo $this->Element('navigation'); ?>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Courses' && $this->params['action'] === 'add' || $this->params['controller'] === 'Courses' && $this->params['action'] === 'index'
    || $this->params['controller'] === 'Courses' && $this->params['action'] === 'edit'): ?>
    <?php echo $this->Element('navigation'); ?>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Semesters' && $this->params['action'] === 'add' || $this->params['controller'] === 'Semesters' && $this->params['action'] === 'index'
    || $this->params['controller'] === 'Semesters' && $this->params['action'] === 'edit'): ?>
    <?php echo $this->Element('navigation'); ?>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Usertypes' && $this->params['action'] === 'add' || $this->params['controller'] === 'Usertypes' && $this->params['action'] === 'index'
    || $this->params['controller'] === 'Usertypes' && $this->params['action'] === 'edit'): ?>
    <?php echo $this->Element('navigation'); ?>
<?php endif; ?>

<?php if ($this->params['controller'] === 'SocialTypes' && $this->params['action'] === 'add' || $this->params['controller'] === 'SocialTypes' && $this->params['action'] === 'index'
    || $this->params['controller'] === 'SocialTypes' && $this->params['action'] === 'edit'): ?>
    <?php echo $this->Element('navigation'); ?>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Themes' && $this->params['action'] === 'add' || $this->params['controller'] === 'Themes' && $this->params['action'] === 'index'
    || $this->params['controller'] === 'Themes' && $this->params['action'] === 'edit'): ?>
    <?php echo $this->Element('navigation'); ?>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Baners' && $this->params['action'] === 'add' || $this->params['controller'] === 'Baners' && $this->params['action'] === 'index'
    || $this->params['controller'] === 'Baners' && $this->params['action'] === 'edit'): ?>
    <?php echo $this->Element('navigation'); ?>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Tutorials' && $this->params['action'] === 'add' || $this->params['controller'] === 'Tutorials' && $this->params['action'] === 'index'
    || $this->params['controller'] === 'Tutorials' && $this->params['action'] === 'edit'): ?>
    <?php echo $this->Element('navigation'); ?>
<?php endif; ?>

<?php if ($this->params['controller'] === 'ProjectImages' && $this->params['action'] === 'add' || $this->params['controller'] === 'ProjectImages' && $this->params['action'] === 'edit'): ?>
    <?php echo $this->Element('navigation'); ?>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Movies' && $this->params['action'] === 'add' || $this->params['controller'] === 'Movies' && $this->params['action'] === 'edit'): ?>
    <?php echo $this->Element('navigation'); ?>
<?php endif; ?>

    <div class="container">
<?php echo $this->Session->flash(); ?>

<?php echo $this->fetch('content'); ?>
    </div>

<?php if ($this->params['controller'] === 'UserImages' && $this->params['action'] === 'add' || $this->params['controller'] === 'UserImages' && $this->params['action'] === 'edit'): ?>
    <?php echo $this->Element('footer'); ?>
<?php endif; ?>
<?php if ($this->params['controller'] === 'Users' && $this->params['action'] === 'perfil' || $this->params['controller'] === 'Users' && $this->params['action'] === 'index'): ?>
    <?php echo $this->Element('footer'); ?>
<?php endif; ?>
<?php if ($this->params['controller'] === 'Users' && $this->params['action'] === 'view'): ?>
    <?php echo $this->Element('footer'); ?>
<?php endif; ?>
<?php if ($this->params['controller'] === 'Resumes' && $this->params['action'] === 'index'): ?>
    <?php echo $this->Element('footer'); ?>
<?php endif; ?>
<?php if ($this->params['controller'] === 'SkillUsers' && $this->params['action'] === 'index'): ?>
    <?php echo $this->Element('footer'); ?>
<?php endif; ?>
<?php if ($this->params['controller'] === 'Resumes' && $this->params['action'] === 'add'): ?>
    <?php echo $this->Element('footer'); ?>
<?php endif; ?>
<?php if ($this->params['controller'] === 'Resumes' && $this->params['action'] === 'edit'): ?>
    <?php echo $this->Element('footer'); ?>
<?php endif; ?>

<?php if ($this->params['controller'] === 'users' && $this->params['action'] === 'login'): ?>
    <?php echo $this->Element('footer-login'); ?>
<?php endif; ?>
<?php if ($this->params['controller'] === 'Users' && $this->params['action'] === 'add' || $this->params['controller'] === 'Users' && $this->params['action'] === 'edit'): ?>
    <?php echo $this->Element('footer-login'); ?>
<?php endif; ?>
<?php if ($this->params['controller'] === 'Projects' && $this->params['action'] === 'add' || $this->params['controller'] === 'Projects' && $this->params['action'] === 'index'
    || $this->params['controller'] === 'Projects' && $this->params['action'] === 'edit' || $this->params['controller'] === 'Projects' && $this->params['action'] === 'view'): ?>
    <?php echo $this->Element('footer'); ?>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Skills' && $this->params['action'] === 'add' || $this->params['controller'] === 'Skills' && $this->params['action'] === 'index'
    || $this->params['controller'] === 'Skills' && $this->params['action'] === 'edit'): ?>
    <?php echo $this->Element('footer'); ?>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Socials' && $this->params['action'] === 'add' || $this->params['controller'] === 'Socials' && $this->params['action'] === 'index'
    || $this->params['controller'] === 'Socials' && $this->params['action'] === 'edit'): ?>
    <?php echo $this->Element('footer'); ?>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Archives' && $this->params['action'] === 'add' || $this->params['controller'] === 'Archives' && $this->params['action'] === 'index'
    || $this->params['controller'] === 'Archives' && $this->params['action'] === 'edit'): ?>
    <?php echo $this->Element('footer'); ?>
<?php endif; ?>

<?php if ($this->params['controller'] === 'ProjectImages' && $this->params['action'] === 'add' || $this->params['controller'] === 'ProjectImages' && $this->params['action'] === 'edit'): ?>
    <?php echo $this->Element('footer'); ?>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Movies' && $this->params['action'] === 'add' || $this->params['controller'] === 'Movies' && $this->params['action'] === 'edit'): ?>
    <?php echo $this->Element('footer'); ?>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Shifts' && $this->params['action'] === 'add' || $this->params['controller'] === 'Shifts' && $this->params['action'] === 'index'
    || $this->params['controller'] === 'Shifts' && $this->params['action'] === 'edit'): ?>
    <?php echo $this->Element('footer'); ?>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Courses' && $this->params['action'] === 'add' || $this->params['controller'] === 'Courses' && $this->params['action'] === 'index'
    || $this->params['controller'] === 'Courses' && $this->params['action'] === 'edit'): ?>
    <?php echo $this->Element('footer'); ?>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Semesters' && $this->params['action'] === 'add' || $this->params['controller'] === 'Semesters' && $this->params['action'] === 'index'
    || $this->params['controller'] === 'Semesters' && $this->params['action'] === 'edit'): ?>
    <?php echo $this->Element('footer'); ?>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Usertypes' && $this->params['action'] === 'add' || $this->params['controller'] === 'Usertypes' && $this->params['action'] === 'index'
    || $this->params['controller'] === 'Usertypes' && $this->params['action'] === 'edit'): ?>
    <?php echo $this->Element('footer'); ?>
<?php endif; ?>

<?php if ($this->params['controller'] === 'SocialTypes' && $this->params['action'] === 'add' || $this->params['controller'] === 'SocialTypes' && $this->params['action'] === 'index'
    || $this->params['controller'] === 'SocialTypes' && $this->params['action'] === 'edit'): ?>
    <?php echo $this->Element('footer'); ?>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Themes' && $this->params['action'] === 'add' || $this->params['controller'] === 'Themes' && $this->params['action'] === 'index'
    || $this->params['controller'] === 'Themes' && $this->params['action'] === 'edit'): ?>
    <?php echo $this->Element('footer'); ?>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Baners' && $this->params['action'] === 'add' || $this->params['controller'] === 'Baners' && $this->params['action'] === 'index'
    || $this->params['controller'] === 'Baners' && $this->params['action'] === 'edit'): ?>
    <?php echo $this->Element('footer'); ?>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Tutorials' && $this->params['action'] === 'add' || $this->params['controller'] === 'Tutorials' && $this->params['action'] === 'index'
    || $this->params['controller'] === 'Tutorials' && $this->params['action'] === 'edit'): ?>
    <?php echo $this->Element('footer'); ?>
<?php endif; ?>
