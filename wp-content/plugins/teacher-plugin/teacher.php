<?php
class Teacher {
    private $id;
    private $name;
    private $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function save() {
        global $wpdb;
        $table_name = $wpdb->prefix . 'teacher';

        $wpdb->insert(
            $table_name,
            array(
                'name' => $this->name,
                'email' => $this->email
            )
        );

        $this->id = $wpdb->insert_id;
    }

    public function update() {
        global $wpdb;
        $table_name = $wpdb->prefix . 'teacher';

        $wpdb->update(
            $table_name,
            array(
                'name' => $this->name,
                'email' => $this->email
            ),
            array('id' => $this->id)
        );
    }

    public function delete() {
        global $wpdb;
        $table_name = $wpdb->prefix . 'teacher';

        $wpdb->delete(
            $table_name,
            array('id' => $this->id)
        );
    }

    public static function getTeachers() {
        global $wpdb;
        $table_name = $wpdb->prefix . 'teacher';

        $results = $wpdb->get_results("SELECT * FROM $table_name");

        $teachers = array();
        foreach ($results as $result) {
            $teacher = new Teacher($result->name, $result->email);
            $teacher->id = $result->id;
            $teachers[] = $teacher;
        }

        return $teachers;
    }
}
?>
