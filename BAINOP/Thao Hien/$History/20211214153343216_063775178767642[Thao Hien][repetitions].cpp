#include<bits/stdc++.h>
using namespace std;
string s;
long long int i, maxx, dem;
int main(){
freopen("repetitions.inp", "r", stdin);
freopen("repetitions.out", "w", stdout);
getline(cin,s);
maxx=1; dem=1;
for(i=0; i<s.size();i++)
if(s[i]=s[i-1])  dem++;

max(maxx, dem);
cout<<maxx;
}
