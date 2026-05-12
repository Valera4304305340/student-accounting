public function up(): void
{
    Schema::create('cities', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->foreignId('country_id')->constrained()->onDelete('cascade');
        $table->timestamps();
    });
}
