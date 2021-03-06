# Generated by Django 3.0 on 2020-01-10 09:38

from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='faculty_registration',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.CharField(max_length=200)),
                ('email', models.CharField(max_length=200)),
                ('phoneno', models.IntegerField(blank='True', null='True')),
                ('batch', models.CharField(max_length=200)),
                ('password', models.CharField(max_length=200)),
                ('username', models.CharField(max_length=200)),
            ],
        ),
        migrations.CreateModel(
            name='studentregistration',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('admission_no', models.CharField(max_length=200)),
                ('admission_date', models.CharField(max_length=200)),
                ('name', models.CharField(max_length=200)),
                ('dob', models.CharField(max_length=200)),
                ('gender', models.CharField(max_length=200)),
                ('mobile', models.IntegerField(blank='True', null='True')),
                ('guardian', models.CharField(max_length=200)),
                ('batch', models.CharField(max_length=200)),
                ('email', models.CharField(max_length=200)),
                ('password', models.CharField(max_length=200)),
            ],
        ),
    ]
