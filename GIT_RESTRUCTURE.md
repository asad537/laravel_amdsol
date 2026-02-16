# Git Repository Restructure Guide

## Current Structure
```
repository/
└── application/
    └── laravel_migration/
        ├── app/
        ├── public/
        ├── resources/
        └── ...
```

## Target Structure
```
repository/
├── app/
├── public/
├── resources/
└── ...
```

## Steps to Remove 'application' Folder from Git

### Option 1: Using Git Commands (Recommended)

```bash
# 1. Navigate to your repository root
cd /path/to/your/repository

# 2. Move all files from application/laravel_migration to root
git mv application/laravel_migration/* .
git mv application/laravel_migration/.* . 2>/dev/null || true

# 3. Remove the now-empty application folder
git rm -r application

# 4. Commit the changes
git add .
git commit -m "Restructure: Move laravel_migration to root and remove application folder"

# 5. Push to remote
git push origin main
```

### Option 2: Manual Method

```bash
# 1. Navigate to repository root
cd /path/to/your/repository

# 2. Create a temporary backup
cp -r application/laravel_migration /tmp/laravel_backup

# 3. Remove application folder from git
git rm -rf application

# 4. Copy files back to root
cp -r /tmp/laravel_backup/* .
cp -r /tmp/laravel_backup/.* . 2>/dev/null || true

# 5. Add all files
git add .

# 6. Commit
git commit -m "Restructure: Move laravel_migration to root"

# 7. Push
git push origin main
```

### Option 3: Using Git Filter-Repo (For Clean History)

```bash
# Install git-filter-repo first
# pip install git-filter-repo

# 1. Navigate to repository
cd /path/to/your/repository

# 2. Rewrite history to move files
git filter-repo --path application/laravel_migration/ --path-rename application/laravel_migration/:

# 3. Force push (WARNING: This rewrites history)
git push origin main --force
```

## After Restructuring

### Update .gitignore (if needed)
Make sure your `.gitignore` is in the root:
```
/node_modules
/public/hot
/public/storage
/storage/*.key
/vendor
.env
.env.backup
.phpunit.result.cache
Homestead.json
Homestead.yaml
npm-debug.log
yarn-error.log
```

### Update Documentation
Update any documentation that references the old path structure.

### Notify Team Members
If working in a team, notify everyone about the restructure:
```bash
# Team members should run:
git fetch origin
git reset --hard origin/main
```

## Verification

After restructuring, verify:
```bash
# Check git status
git status

# Verify file structure
ls -la

# Check git log
git log --oneline -5
```

## Important Notes

- **Backup First**: Always backup your repository before major restructuring
- **Coordinate with Team**: If multiple people are working, coordinate the change
- **Update CI/CD**: Update any CI/CD pipelines that reference old paths
- **Update Deployment Scripts**: Update deployment scripts with new paths
- **Check Submodules**: If using submodules, update their paths

## Rollback (if needed)

If something goes wrong:
```bash
# Reset to previous commit
git reset --hard HEAD~1

# Or reset to specific commit
git reset --hard <commit-hash>

# Force push (if already pushed)
git push origin main --force
```
